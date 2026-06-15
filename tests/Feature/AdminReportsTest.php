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

    public function test_revenue_gst_calculations_in_reports()
    {
        // 1. Setup Admin user
        $admin = new User();
        $admin->name = 'Admin User 4';
        $admin->email = 'admin4@codekaro.in';
        $admin->password = bcrypt('password');
        $admin->role = 100;
        $admin->status = 1;
        $admin->email_verified_at = now();
        $admin->save();

        // 2. Setup Student user
        $student = new User();
        $student->name = 'Student User 4';
        $student->email = 'student4@codekaro.in';
        $student->password = bcrypt('password');
        $student->role = 0;
        $student->status = 1;
        $student->save();

        // 3. Setup Batch
        $batch = new Batch();
        $batch->name = 'Test Batch 4';
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

        // 5. Create a payment WITH 18% GST applicable (amount = 118 INR = 11800 paisa)
        $paymentGst = new CourseEnrollmentPayment();
        $paymentGst->course_enrollment_id = $enrollment->id;
        $paymentGst->amount = 11800;
        $paymentGst->paid_at = now()->subMinutes(1);
        $paymentGst->is_gst_applicable = true;
        $paymentGst->payment_method = 'upi';
        $paymentGst->transaction_id = 'tx_gst';
        $paymentGst->save();

        // 6. Create a payment WITHOUT GST applicable (amount = 50 INR = 5000 paisa)
        $paymentNoGst = new CourseEnrollmentPayment();
        $paymentNoGst->course_enrollment_id = $enrollment->id;
        $paymentNoGst->amount = 5000;
        $paymentNoGst->paid_at = now();
        $paymentNoGst->is_gst_applicable = false;
        $paymentNoGst->payment_method = 'upi';
        $paymentNoGst->transaction_id = 'tx_nogst';
        $paymentNoGst->save();

        // 7. Request reports data for range=7
        $response = $this->actingAs($admin)
            ->getJson('/admin/reports-data?range=7');

        $response->assertStatus(200);
        $data = $response->json();

        // Total Gross Revenue: 118 + 50 = 168
        $this->assertEquals(168, $data['metrics']['revenue']['current']);

        // Total Net Revenue (RazorPay net + Cash): 150
        $this->assertEquals(150, $data['metrics']['revenue']['currentNet']);
 
        // Total GST: 118 - (118 / 1.18) = 18
        $this->assertEquals(18, $data['metrics']['revenue']['currentGst']);
 
        // Cash Revenue: 50
        $this->assertEquals(50, $data['metrics']['revenue']['currentCash']);
 
        // GST Applicable Revenue: 118
        $this->assertEquals(118, $data['metrics']['revenue']['currentGstApplicable']);
 
        // Verify date bucket has net and gst values
        $todayDateStr = now()->format('M d');
        $foundToday = false;
        foreach ($data['revenue'] as $revItem) {
            if ($revItem['date'] === $todayDateStr) {
                $this->assertEquals(168, $revItem['amount']);
                $this->assertEquals(50, $revItem['amountNet']);
                $this->assertEquals(18, $revItem['amountGst']);
                $foundToday = true;
            }
        }
        $this->assertTrue($foundToday, "Today's dynamic GST values should align correctly.");
 
        // Verify transactions list
        $this->assertArrayHasKey('transactions', $data);
        $this->assertCount(2, $data['transactions']);
        
        // Assert on tx_nogst transaction
        $txNoGst = $data['transactions'][0];
        $this->assertEquals('Student User 4', $txNoGst['student_name']);
        $this->assertEquals('student4@codekaro.in', $txNoGst['student_email']);
        $this->assertEquals('Test Batch 4', $txNoGst['course_name']);
        $this->assertEquals(50, $txNoGst['amount']);
        $this->assertEquals('tx_nogst', $txNoGst['transaction_id']);
        $this->assertFalse($txNoGst['is_gst_applicable']);
        $this->assertEquals(0, $txNoGst['gst_amount']);
 
        // Assert on tx_gst transaction
        $txGst = $data['transactions'][1];
        $this->assertEquals('Student User 4', $txGst['student_name']);
        $this->assertEquals('student4@codekaro.in', $txGst['student_email']);
        $this->assertEquals('Test Batch 4', $txGst['course_name']);
        $this->assertEquals(118, $txGst['amount']);
        $this->assertEquals('tx_gst', $txGst['transaction_id']);
        $this->assertTrue($txGst['is_gst_applicable']);
        $this->assertEquals(18, $txGst['gst_amount']);
    }
}
