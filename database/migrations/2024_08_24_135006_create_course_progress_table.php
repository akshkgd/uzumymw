<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->foreignId('batchId');
            $table->foreignId('contentId');
            $table->integer('visited')->default(0);
            $table->integer('timeSpent')->nullable();
            $table->integer('progress')->nullable();
            $table->datetime('firstAccess')->nullable();
            $table->datetime('lastAccess')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('course_progress');
    }
}
