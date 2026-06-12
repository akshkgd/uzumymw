<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEnrollmentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enrollment_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_enrollment_id')
                  ->constrained('course_enrollments')
                  ->onDelete('cascade');
            $table->integer('amount'); // stored in paisa
            $table->dateTime('paid_at');
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('purpose')->default('enrollment');
            $table->boolean('is_gst_applicable')->default(true);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        // Fast raw SQL insert-select at database level
        $sql = "
            INSERT INTO course_enrollment_payments (
                course_enrollment_id, 
                amount, 
                paid_at, 
                payment_method, 
                transaction_id, 
                invoice_id, 
                purpose, 
                is_gst_applicable, 
                remarks, 
                created_at, 
                updated_at
            )
            SELECT 
                id, 
                amountPaid, 
                COALESCE(NULLIF(paidAt, ''), created_at), 
                paymentMethod, 
                transactionId, 
                invoiceId, 
                'enrollment', 
                1, 
                'Legacy payment imported during migration', 
                CURRENT_TIMESTAMP, 
                CURRENT_TIMESTAMP
            FROM course_enrollments
            WHERE hasPaid = 1 AND amountPaid > 0
        ";
        
        \DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_enrollment_payments');
    }
}
