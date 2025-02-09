<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailSentToCourseEnrollments extends Migration
{
    public function up()
    {
        Schema::table('course_enrollments', function (Blueprint $table) {
            $table->boolean('email_sent')->default(false);
        });
    }

    public function down()
    {
        Schema::table('course_enrollments', function (Blueprint $table) {
            $table->dropColumn('email_sent');
        });
    }
}