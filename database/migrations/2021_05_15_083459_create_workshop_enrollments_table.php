<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->foreignId('workshopId');
            $table->foreignId('topicId')->nullable();
            $table->dateTime('nextClass')->nullable();
            $table->integer('amountPayable')->nullable();
            $table->integer('amountPaid')->nullable();
            $table->string('paidAt')->nullable();
            $table->string('coupanCode')->nullable();
            $table->string('invoiceId')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('paymentMethod')->nullable();
            $table->integer('hasPaid')->default(0);
            $table->string('certificateId')->unique()->nullable();
            $table->string('certificateGeneratedAt')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('workshop_enrollments');
    }
}
