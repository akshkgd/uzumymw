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
}
