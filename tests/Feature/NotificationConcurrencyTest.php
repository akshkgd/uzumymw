<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Batch;
use App\CourseEnrollment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Http;
use App\Mail\OnboardingMail;
use App\Notifications\CourseAccessGranted;

class NotificationConcurrencyTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        Mail::fake();
        Notification::fake();
    }

    /**
     * Test that concurrent webhook hits for topicId 100 (Workshops)
     * triggers Pabbly webhook and OnboardingMail exactly once.
     */
    public function test_concurrent_webhook_for_topic_100_sends_onboarding_mail_exactly_once()
    {
        // 1. Arrange
        $teacher = User::create([
            'name' => 'Teacher Name',
            'email' => 'teacher@codekaro.in',
            'password' => bcrypt('password'),
        ]);

        $student = User::create([
            'name' => 'Student Name',
            'email' => 'student@codekaro.in',
            'password' => bcrypt('password'),
            'mobile' => '9876543210',
        ]);

        $batch = new Batch();
        $batch->topicId = 100; // Bootcamp
        $batch->name = 'Full Stack Web Development';
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(3)->toDateString();
        $batch->teacherId = $teacher->id;
        $batch->groupLink = 'https://chat.whatsapp.com/test';
        $batch->nextClass = '2026-06-11 20:00:00';
        $batch->payable = 19900;
        $batch->price = 19900;
        $batch->save();

        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 19900;
        $enrollment->amountPayable = 19900;
        $enrollment->status = 0;
        $enrollment->hasPaid = 0;
        $enrollment->invoiceId = 'INV-ORDER123';
        $enrollment->save();

        $payload = [
            'payload' => [
                'payment' => [
                    'entity' => [
                        'id' => 'pay_test123',
                        'amount' => 19900,
                        'method' => 'upi',
                        'notes' => [
                            'enrollmentId' => $enrollment->id,
                            'topicId' => 100
                        ]
                    ]
                ]
            ]
        ];

        // Expect Pabbly webhook call exactly once
        Http::shouldReceive('post')
            ->once()
            ->andReturn(new \Illuminate\Http\Client\Response(
                new \GuzzleHttp\Psr7\Response(200, [], 'success')
            ));

        // 2. Act - Request 1 (Webhook/Payment Completes first)
        $response1 = $this->postJson('/grant-access', $payload);
        $response1->assertStatus(200);

        // 3. Act - Request 2 (Concurrent hit representing payment redirect or duplicate webhook)
        $response2 = $this->postJson('/grant-access', $payload);
        $response2->assertStatus(200);

        // 4. Assert database is updated correctly
        $enrollment->refresh();
        $this->assertEquals(1, $enrollment->hasPaid);
        $this->assertEquals(1, $enrollment->status);
        $this->assertEquals('webhook access granted', $enrollment->field2);
        $this->assertTrue((bool)$enrollment->email_sent);

        // 5. Assert onboarding email sent exactly once
        Mail::assertQueued(OnboardingMail::class, 1);
    }

    /**
     * Test that concurrent webhook hits for standard course topics
     * triggers CourseAccessGranted notification exactly once.
     */
    public function test_concurrent_webhook_for_standard_course_sends_course_access_notification_exactly_once()
    {
        // 1. Arrange
        $teacher = User::create([
            'name' => 'Teacher Name',
            'email' => 'teacher2@codekaro.in',
            'password' => bcrypt('password'),
        ]);

        $student = User::create([
            'name' => 'Student Name',
            'email' => 'student2@codekaro.in',
            'password' => bcrypt('password'),
            'mobile' => '9876543210',
        ]);

        $batch = new Batch();
        $batch->topicId = 200; // Standard course topic
        $batch->name = 'JavaScript Course';
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(1)->toDateString();
        $batch->teacherId = $teacher->id;
        $batch->groupLink = 'https://chat.whatsapp.com/test2';
        $batch->nextClass = '2026-06-10 21:00:00';
        $batch->payable = 49900;
        $batch->price = 49900;
        $batch->save();

        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 49900;
        $enrollment->amountPayable = 49900;
        $enrollment->status = 0;
        $enrollment->hasPaid = 0;
        $enrollment->invoiceId = 'INV-ORDER456';
        $enrollment->save();

        $payload = [
            'payload' => [
                'payment' => [
                    'entity' => [
                        'id' => 'pay_test456',
                        'amount' => 49900,
                        'method' => 'card',
                        'notes' => [
                            'enrollmentId' => $enrollment->id,
                            'topicId' => 200
                        ]
                    ]
                ]
            ]
        ];

        // Expect Pabbly webhook call exactly once
        Http::shouldReceive('post')
            ->once()
            ->andReturn(new \Illuminate\Http\Client\Response(
                new \GuzzleHttp\Psr7\Response(200, [], 'success')
            ));

        // 2. Act - Request 1 (Webhook/Payment Completes first)
        $response1 = $this->postJson('/grant-access', $payload);
        $response1->assertStatus(200);

        // 3. Act - Request 2 (Duplicate request)
        $response2 = $this->postJson('/grant-access', $payload);
        $response2->assertStatus(200);

        // 4. Assert database is updated correctly
        $enrollment->refresh();
        $this->assertEquals(1, $enrollment->hasPaid);
        $this->assertTrue((bool)$enrollment->email_sent);

        // 5. Assert CourseAccessGranted notification was sent exactly once to the student
        Notification::assertSentTo($student, CourseAccessGranted::class, 1);
    }
}
