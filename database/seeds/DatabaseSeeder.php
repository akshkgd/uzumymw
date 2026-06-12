<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Course;
use App\Topic;
use App\Batch;
use App\CourseEnrollment;
use App\CourseEnrollmentPayment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            // Disable Eloquent events for User, CourseEnrollment and CourseEnrollmentPayment
            // to prevent any email queues or webhooks from firing during seeding.
            User::withoutEvents(function () {
                CourseEnrollment::withoutEvents(function () {
                    CourseEnrollmentPayment::withoutEvents(function () {
                        // Clear existing tables to allow re-seeding safely without migrate:fresh
                        CourseEnrollmentPayment::query()->delete();
                        CourseEnrollment::query()->delete();
                        Batch::query()->delete();
                        Topic::query()->delete();
                        Course::query()->delete();
                        User::query()->delete();

                        $this->seedDatabase();
                    });
                });
            });
            $this->command->info('Database seeded successfully!');
        } catch (\Throwable $e) {
            $this->command->error('Error during seeding: ' . $e->getMessage());
            $this->command->error($e->getTraceAsString());
        }
    }

    private function seedDatabase()
    {
        // 1. Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@codekaro.in',
            'password' => bcrypt('admin123'),
            'role' => 100,
            'is_verified' => 1,
            'email_verified_at' => now(),
            'avatar' => 'assets/img/mask.svg',
            'status' => 1,
        ]);

        // 2. Create Instructor / Teacher User
        $teacher = User::create([
            'name' => 'Ashish Instructor',
            'email' => 'ashish@codekaro.in',
            'password' => bcrypt('password'),
            'role' => 1,
            'is_verified' => 1,
            'email_verified_at' => now(),
            'avatar' => 'assets/img/mask.svg',
            'status' => 1,
        ]);

        // 3. Create Students
        $students = [];
        for ($i = 1; $i <= 5; $i++) {
            $students[] = User::create([
                'name' => "Student Number $i",
                'email' => "student$i@codekaro.in",
                'password' => bcrypt('password'),
                'role' => 0,
                'is_verified' => 1,
                'email_verified_at' => now(),
                'mobile' => '987654321' . $i,
                'college' => 'Codekaro College',
                'course' => 'Computer Science',
                'avatar' => 'assets/img/mask.svg',
                'status' => 1,
            ]);
        }

        // 4. Create Courses
        $courses = [
            Course::create(['name' => 'Full Stack Web Development', 'level' => 1]),
            Course::create(['name' => 'JavaScript Bootcamp', 'level' => 2]),
            Course::create(['name' => 'React JS Mastery', 'level' => 3]),
        ];

        // 5. Create Topics
        $topicFsd = Topic::create([
            'id' => 100,
            'name' => 'Full Stack Web Development',
            'level' => 'Beginner to Advanced',
            'type' => 0,
        ]);

        $topicJs = Topic::create([
            'id' => 200,
            'name' => 'JavaScript Masterclass',
            'level' => 'Intermediate',
            'type' => 0,
        ]);

        $topicReact = Topic::create([
            'id' => 300,
            'name' => 'React JS',
            'level' => 'Advanced',
            'type' => 0,
        ]);

        // 6. Create Batches
        $batchFsd = Batch::create([
            'topicId' => 100,
            'name' => 'FSD Cohort 1',
            'description' => 'Comprehensive Full Stack Web Development cohort',
            'slug' => 'fsd-cohort-1',
            'price' => 1990000, // stored in paisa (₹19,900)
            'payable' => 19900,  // standard field
            'startDate' => now()->toDateString(),
            'endDate' => now()->addMonths(6)->toDateString(),
            'teacherId' => $teacher->id,
            'status' => 1, // public
            'nextClass' => now()->addDays(2),
        ]);

        $batchJs = Batch::create([
            'topicId' => 200,
            'name' => 'JS Bootcamp June',
            'description' => 'Master JS fundamentals in 4 weeks',
            'slug' => 'js-bootcamp-june',
            'price' => 499900, // stored in paisa (₹4,999)
            'payable' => 4999,
            'startDate' => now()->toDateString(),
            'endDate' => now()->addMonths(1)->toDateString(),
            'teacherId' => $teacher->id,
            'status' => 1,
            'nextClass' => now()->addDays(1),
        ]);

        $batchReact = Batch::create([
            'topicId' => 300,
            'name' => 'React JS Advanced',
            'description' => 'Advanced React patterns and State management',
            'slug' => 'react-advanced',
            'price' => 799900, // stored in paisa (₹7,999)
            'payable' => 7999,
            'startDate' => now()->toDateString(),
            'endDate' => now()->addMonths(2)->toDateString(),
            'teacherId' => $teacher->id,
            'status' => 1,
            'nextClass' => now()->addDays(3),
        ]);

        // 7. Create Enrollments & Payments
        // Student 1: Fully Paid FSD Cohort
        $enrollment1 = CourseEnrollment::create([
            'userId' => $students[0]->id,
            'batchId' => $batchFsd->id,
            'price' => 1990000,
            'amountPayable' => 1990000,
            'amountPaid' => 0, 
            'hasPaid' => 0,
            'status' => 1,
            'startFrom' => now(),
        ]);
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment1->id,
            'amount' => 1990000, // ₹19,900
            'paid_at' => now(),
            'payment_method' => 'upi',
            'transaction_id' => 'pay_fsd_full_1',
            'invoice_id' => 'INV-2026-001',
            'purpose' => 'enrollment',
            'is_gst_applicable' => true,
            'remarks' => 'Full payment received via UPI',
        ]);
        $enrollment1->syncPaymentSummary();

        // Student 2: Part Paid FSD Cohort (Installment)
        $enrollment2 = CourseEnrollment::create([
            'userId' => $students[1]->id,
            'batchId' => $batchFsd->id,
            'price' => 1990000,
            'amountPayable' => 1990000,
            'amountPaid' => 0,
            'hasPaid' => 0,
            'status' => 1,
            'startFrom' => now(),
        ]);
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment2->id,
            'amount' => 1000000, // ₹10,000 (part-payment)
            'paid_at' => now()->subDays(2),
            'payment_method' => 'bank_transfer',
            'transaction_id' => 'pay_fsd_part_1',
            'invoice_id' => 'INV-2026-002',
            'purpose' => 'enrollment',
            'is_gst_applicable' => true,
            'remarks' => 'First installment received',
        ]);
        $enrollment2->syncPaymentSummary();

        // Student 3: Unpaid FSD Cohort (Pending)
        $enrollment3 = CourseEnrollment::create([
            'userId' => $students[2]->id,
            'batchId' => $batchFsd->id,
            'price' => 1990000,
            'amountPayable' => 1990000,
            'amountPaid' => 0,
            'hasPaid' => 0,
            'status' => 0, // inactive
            'startFrom' => now(),
        ]);
        $enrollment3->syncPaymentSummary();

        // Student 4: Multiple Installments JS Bootcamp
        $enrollment4 = CourseEnrollment::create([
            'userId' => $students[3]->id,
            'batchId' => $batchJs->id,
            'price' => 499900,
            'amountPayable' => 499900,
            'amountPaid' => 0,
            'hasPaid' => 0,
            'status' => 1,
            'startFrom' => now(),
        ]);
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment4->id,
            'amount' => 250000, // ₹2,500
            'paid_at' => now()->subDays(5),
            'payment_method' => 'upi',
            'transaction_id' => 'pay_js_inst_1',
            'invoice_id' => 'INV-2026-003',
            'purpose' => 'enrollment',
            'is_gst_applicable' => true,
            'remarks' => 'Token payment',
        ]);
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment4->id,
            'amount' => 249900, // ₹2,499
            'paid_at' => now(),
            'payment_method' => 'cash',
            'transaction_id' => 'pay_js_inst_2',
            'invoice_id' => 'INV-2026-004',
            'purpose' => 'enrollment',
            'is_gst_applicable' => false, // Offline cash payment
            'remarks' => 'Final cash payment',
        ]);
        $enrollment4->syncPaymentSummary();

        // Student 5: Course Paid + Renewal payment
        $enrollment5 = CourseEnrollment::create([
            'userId' => $students[4]->id,
            'batchId' => $batchReact->id,
            'price' => 799900,
            'amountPayable' => 799900,
            'amountPaid' => 0,
            'hasPaid' => 0,
            'status' => 1,
            'startFrom' => now(),
        ]);
        // Enrollment payment
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment5->id,
            'amount' => 799900, // ₹7,999
            'paid_at' => now()->subMonths(1),
            'payment_method' => 'card',
            'transaction_id' => 'pay_react_full',
            'invoice_id' => 'INV-2026-005',
            'purpose' => 'enrollment',
            'is_gst_applicable' => true,
            'remarks' => 'Original payment for course',
        ]);
        // Renewal payment
        CourseEnrollmentPayment::create([
            'course_enrollment_id' => $enrollment5->id,
            'amount' => 300000, // ₹3,000 renewal
            'paid_at' => now(),
            'payment_method' => 'upi',
            'transaction_id' => 'pay_react_renewal',
            'invoice_id' => 'INV-2026-006',
            'purpose' => 'renewal',
            'is_gst_applicable' => true,
            'remarks' => 'Annual support/mentorship renewal',
        ]);
        $enrollment5->syncPaymentSummary();
    }
}
