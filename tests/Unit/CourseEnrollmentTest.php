<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\CourseEnrollment;

use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseEnrollmentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the payable_in_rupees attribute accessor.
     */
    public function test_payable_in_rupees_accessor()
    {
        // Case 1: Stored in Paisa (9900), price is 199 (Rupees).
        // Since 9900 >= 199 * 2 (398), it should return 99.
        $enrollment1 = new CourseEnrollment();
        $enrollment1->price = 199;
        $enrollment1->amountPayable = 9900;
        $this->assertEquals(99, $enrollment1->payable_in_rupees);

        // Case 2: Stored in Rupees (99), price is 199.
        // Since 99 < 398, it should return 99.
        $enrollment2 = new CourseEnrollment();
        $enrollment2->price = 199;
        $enrollment2->amountPayable = 99;
        $this->assertEquals(99, $enrollment2->payable_in_rupees);

        // Case 3: Stored in Paisa (19900), price is 199.
        // Since 19900 >= 398, it should return 199.
        $enrollment3 = new CourseEnrollment();
        $enrollment3->price = 199;
        $enrollment3->amountPayable = 19900;
        $this->assertEquals(199, $enrollment3->payable_in_rupees);

        // Case 4: Stored in Rupees (199), price is 199.
        // Since 199 < 398, it should return 199.
        $enrollment4 = new CourseEnrollment();
        $enrollment4->price = 199;
        $enrollment4->amountPayable = 199;
        $this->assertEquals(199, $enrollment4->payable_in_rupees);

        // Case 5: Price is 0 or null, stored in Paisa (9900).
        // Since 9900 >= 5000, it should return 99.
        $enrollment5 = new CourseEnrollment();
        $enrollment5->price = 0;
        $enrollment5->amountPayable = 9900;
        $this->assertEquals(99, $enrollment5->payable_in_rupees);

        // Case 6: Price is 0 or null, stored in Rupees (99).
        // Since 99 < 5000, it should return 99.
        $enrollment6 = new CourseEnrollment();
        $enrollment6->price = 0;
        $enrollment6->amountPayable = 99;
        $this->assertEquals(99, $enrollment6->payable_in_rupees);
    }

    /**
     * Test syncPaymentSummary for free enrollment.
     */
    public function test_sync_payment_summary_for_free_enrollment()
    {
        $student = \App\User::create([
            'name' => 'Free Student',
            'email' => 'free@codekaro.in',
            'password' => bcrypt('password'),
        ]);

        $batch = new \App\Batch();
        $batch->name = 'Free Course';
        $batch->price = 10000;
        $batch->payable = 10000;
        $batch->startDate = now()->toDateString();
        $batch->endDate = now()->addMonths(1)->toDateString();
        $batch->teacherId = $student->id; // Use student ID as placeholder teacher
        $batch->save();

        $enrollment = new CourseEnrollment();
        $enrollment->userId = $student->id;
        $enrollment->batchId = $batch->id;
        $enrollment->price = 10000;
        $enrollment->amountPayable = 0; // Free enrollment!
        $enrollment->status = 1;
        $enrollment->hasPaid = 0; // Starts unpaid
        $enrollment->save();

        // Sync payment summary when no payments exist
        $enrollment->syncPaymentSummary();

        // hasPaid should become 1 because amountPayable is 0 (Free)
        $this->assertEquals(1, $enrollment->hasPaid);
        $this->assertEquals(0, $enrollment->amountPaid);
    }
}
