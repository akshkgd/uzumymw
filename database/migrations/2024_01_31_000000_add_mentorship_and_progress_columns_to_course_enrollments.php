<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMentorshipAndProgressColumnsToCourseEnrollments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_enrollments', function (Blueprint $table) {
            $table->integer('time_spent')->nullable()->after('subscriptionFeedback');
            $table->integer('progress')->nullable()->after('time_spent');
            $table->string('mentorship_status')->nullable()->after('progress');
            $table->date('mentorship_active_till_date')->nullable()->after('mentorship_status');
            $table->integer('mentorship_active_till')->nullable()->after('mentorship_active_till_date');
            
            // Adding indexes for faster search
            $table->index('progress');
            $table->index('mentorship_status');
            $table->index('mentorship_active_till_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_enrollments', function (Blueprint $table) {
            // Remove indexes first
            $table->dropIndex(['progress']);
            $table->dropIndex(['mentorship_status']);
            $table->dropIndex(['mentorship_active_till_date']);
            
            // Remove columns
            $table->dropColumn([
                'time_spent',
                'progress',
                'mentorship_status',
                'mentorship_active_till_date',
                'mentorship_active_till'
            ]);
        });
    }
} 