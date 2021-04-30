<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topicId')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->integer('price')->nullable();
            $table->integer('payable');
            $table->integer('certificateFee')->default(0);
            $table->string('offerId')->nullable();
            $table->string('limit')->nullable();
            $table->string('img')->nullable();
            $table->string('association')->nullable();
            $table->string('logo')->nullable();
            $table->integer('type')->default(0); // 0 is for course and 1 for crash course / workshops
            $table->date('startDate');
            $table->date('endDate');
            $table->text('schedule')->nullable();
            $table->text('about')->nullable();
            $table->text('learn')->nullable();
            $table->text('benefits')->nullable();
            $table->string('groupLink')->nullable();
            $table->string('groupLink1')->nullable();
            $table->string('groupLink2')->nullable();
            $table->string('telegramBroadcast')->nullable();
            $table->foreignId('teacherId')->nullable();
            $table->boolean('TeacherPayment')->default(False);
            $table->string('meetingLink')->nullable();
            $table->string('topic')->nullable();
            $table->string('desc')->nullable();
            $table->dateTime('nextClass')->nullable();
            $table->integer('status')->default(0); // 0 for private 1 for public 2 for live and 3 for complete
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
        Schema::dropIfExists('batches');
    }
}
