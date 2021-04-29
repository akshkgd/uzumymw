<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->id();
            // $table->integer('userId');
            $table->foreignId('userId');
            $table->foreignId('batchId');
            $table->integer('price');
            $table->dateTime('nextClass')->nullable();
            $table->integer('amountPayable')->nullable();
            $table->integer('amountPaid')->nullable();
            $table->string('paidAt')->nullable();
            $table->integer('certificateFee')->default(0);
            $table->string('coupanCode')->nullable();
            $table->string('invoiceId')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('paymentMethod')->nullable();
            $table->integer('hasPaid')->default(0);
            $table->string('certificateId')->unique()->nullable();
            $table->string('certificateGeneratedAt')->nullable();
            $table->integer('status')->default(1);
            $table->integer('refundStatus')->default(0);
            $table->integer('refundAmount')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->string('field5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_enrollments');
    }
}
