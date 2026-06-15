<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Batch;
use App\CourseEnrollment;
use App\CourseEnrollmentPayment;
use Carbon\Carbon;

class AdminReportsTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_reports_data_uses_course_enrollment_payment_table()
    {
        // 1. Setup Admin user
        $admin = new User();
        $admin->name = 'Admin User';
        $admin->email = 'admin@codekaro.in';
        $admin->password = bcrypt('password');
        $admin->role = 100;
        $admin->status = 1;
        $admin->email_verified_at = now();
        $admin->save();

        // 2. Setup Student user
        $student = new User();
        $student->name = 'Student User';
        $student->email = 'student@codekaro.in';
        $student->password = bcrypt('password');
        $student->role = 0;
        $student->status = 1;
        $student->save();

        // 3. Setup Batch
        $batch = new Batch();
        $batch->name = 'Test Batch';
        $batch->topicId = 100;
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(1)->toDateString();
        $batch->teacherId = $admin->id;
        $batch->price = 10000;
        $batch->payable = 10000;
        $batch->save();

        // 4. Setup CourseEnrollment that has paid (old way, should NOT be counted directly now)
        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 10000;
        $enrollment->amountPayable = 10000;
        $enrollment->amountPaid = 5000; // 5000 paisa = 50 INR
        $enrollment->hasPaid = 1;
        $enrollment->paidAt = now()->toDateTimeString();
        $enrollment->save();

        // Note: CourseEnrollment observer might automatically create a CourseEnrollmentPayment,
        // so we delete all auto-generated payments first to isolate our test.
        CourseEnrollmentPayment::query()->delete();

        // Let's perform a request before adding a payment. Revenue should be 0.
        $response = $this->actingAs($admin)
            ->getJson('/admin/reports-data?range=7');

        $response->assertStatus(200);
        $data = $response->json();
        $this->assertEquals(0, $data['metrics']['revenue']['current']);

        // 5. Create a CourseEnrollmentPayment (new way, should be counted)
        $payment = new CourseEnrollmentPayment();
        $payment->course_enrollment_id = $enrollment->id;
        $payment->amount = 7500; // 7500 paisa = 75 INR
        $payment->paid_at = now();
        $payment->payment_method = 'upi';
        $payment->transaction_id = 'tx_123';
        $payment->save();

        // 6. Request reports data again. Revenue should now be 75.
        $response = $this->actingAs($admin)
            ->getJson('/admin/reports-data?range=7');

        $response->assertStatus(200);
        $data = $response->json();
        
        $this->assertEquals(75, $data['metrics']['revenue']['current']);

        // Check that the revenue data for today contains 75
        $todayDateStr = now()->format('M d');
        $foundToday = false;
        foreach ($data['revenue'] as $revItem) {
            if ($revItem['date'] === $todayDateStr) {
                $this->assertEquals(75, $revItem['amount']);
                $foundToday = true;
            }
        }
        $this->assertTrue($foundToday, "Today's revenue data should be present in the response.");
    }

    public function test_admin_home_dashboard_uses_course_enrollment_payment_table()
    {
        // 1. Setup Admin user
        $admin = new User();
        $admin->name = 'Admin User 2';
        $admin->email = 'admin2@codekaro.in';
        $admin->password = bcrypt('password');
        $admin->role = 100;
        $admin->status = 1;
        $admin->email_verified_at = now();
        $admin->save();

        // 2. Setup Student user
        $student = new User();
        $student->name = 'Student User 2';
        $student->email = 'student2@codekaro.in';
        $student->password = bcrypt('password');
        $student->role = 0;
        $student->status = 1;
        $student->save();

        // 3. Setup Batch
        $batch = new Batch();
        $batch->name = 'Test Batch 2';
        $batch->topicId = 100;
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(1)->toDateString();
        $batch->teacherId = $admin->id;
        $batch->price = 10000;
        $batch->payable = 10000;
        $batch->save();

        // 4. Setup CourseEnrollment that has paid (old way, should NOT be counted directly now)
        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 10000;
        $enrollment->amountPayable = 10000;
        $enrollment->amountPaid = 5000; // 5000 paisa = 50 INR
        $enrollment->hasPaid = 1;
        $enrollment->paidAt = now()->toDateTimeString();
        $enrollment->save();

        // Delete all auto-generated payments first to isolate our test.
        CourseEnrollmentPayment::query()->delete();

        // Let's perform a request before adding a payment. Revenue should be 0.
        $response = $this->actingAs($admin)
            ->get('/home?range=today');

        $response->assertStatus(200);
        $response->assertViewHas('totalThisPeriod', 0);

        // 5. Create a CourseEnrollmentPayment (new way, should be counted)
        $payment = new CourseEnrollmentPayment();
        $payment->course_enrollment_id = $enrollment->id;
        $payment->amount = 8000; // 8000 paisa = 80 INR
        $payment->paid_at = now();
        $payment->payment_method = 'upi';
        $payment->transaction_id = 'tx_456';
        $payment->save();

        // 6. Request home dashboard again. Revenue should now be 80.
        $response = $this->actingAs($admin)
            ->get('/home?range=today');

        $response->assertStatus(200);
        $response->assertViewHas('totalThisPeriod', 80.0);
    }

    public function test_comparison_data_alignment_in_reports()
    {
        // 1. Setup Admin user
        $admin = new User();
        $admin->name = 'Admin User 3';
        $admin->email = 'admin3@codekaro.in';
        $admin->password = bcrypt('password');
        $admin->role = 100;
        $admin->status = 1;
        $admin->email_verified_at = now();
        $admin->save();

        // 2. Setup Student user
        $student = new User();
        $student->name = 'Student User 3';
        $student->email = 'student3@codekaro.in';
        $student->password = bcrypt('password');
        $student->role = 0;
        $student->status = 1;
        $student->save();

        // 3. Setup Batch
        $batch = new Batch();
        $batch->name = 'Test Batch 3';
        $batch->topicId = 100;
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(1)->toDateString();
        $batch->teacherId = $admin->id;
        $batch->price = 10000;
        $batch->payable = 10000;
        $batch->save();

        // 4. Setup CourseEnrollment
        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 10000;
        $enrollment->amountPayable = 10000;
        $enrollment->amountPaid = 12000;
        $enrollment->hasPaid = 1;
        $enrollment->paidAt = now()->toDateTimeString();
        $enrollment->save();

        // Delete all auto-generated payments first to isolate our test.
        CourseEnrollmentPayment::query()->delete();

        // 5. Create a CourseEnrollmentPayment in the current period (today)
        $paymentCurrent = new CourseEnrollmentPayment();
        $paymentCurrent->course_enrollment_id = $enrollment->id;
        $paymentCurrent->amount = 7500; // 75 INR
        $paymentCurrent->paid_at = now();
        $paymentCurrent->payment_method = 'upi';
        $paymentCurrent->transaction_id = 'tx_curr';
        $paymentCurrent->save();

        // 6. Create a CourseEnrollmentPayment in the previous period (8 days ago)
        $paymentPrevious = new CourseEnrollmentPayment();
        $paymentPrevious->course_enrollment_id = $enrollment->id;
        $paymentPrevious->amount = 4500; // 45 INR
        $paymentPrevious->paid_at = now()->subDays(8);
        $paymentPrevious->payment_method = 'upi';
        $paymentPrevious->transaction_id = 'tx_prev';
        $paymentPrevious->save();

        // 7. Request reports data for range=7
        $response = $this->actingAs($admin)
            ->getJson('/admin/reports-data?range=7');

        $response->assertStatus(200);
        $data = $response->json();

        // Assert that overall current and previous revenue are correct
        $this->assertEquals(75, $data['metrics']['revenue']['current']);
        $this->assertEquals(30, $data['metrics']['revenue']['difference']);

        // Check alignment: 
        // 1. Today's bucket should have amount = 75 and previousAmount = 0
        $todayDateStr = now()->format('M d');
        $foundToday = false;
        foreach ($data['revenue'] as $revItem) {
            if ($revItem['date'] === $todayDateStr) {
                $this->assertEquals(75, $revItem['amount']);
                $this->assertEquals(0, $revItem['previousAmount']);
                $foundToday = true;
            }
        }
        $this->assertTrue($foundToday, "Today's revenue data should be present in response.");

        // 2. Yesterday's bucket should have amount = 0 and previousAmount = 45 (aligned from 8 days ago)
        $yesterdayDateStr = now()->subDays(1)->format('M d');
        $foundYesterday = false;
        foreach ($data['revenue'] as $revItem) {
            if ($revItem['date'] === $yesterdayDateStr) {
                $this->assertEquals(0, $revItem['amount']);
                $this->assertEquals(45, $revItem['previousAmount']);
                $foundYesterday = true;
            }
        }
        $this->assertTrue($foundYesterday, "Yesterday's revenue data (aligned with 8 days ago) should be present in response.");
    }
}
