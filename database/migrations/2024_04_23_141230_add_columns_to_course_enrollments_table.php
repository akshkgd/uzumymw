<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_enrollments', function (Blueprint $table) {
            $table->integer('type')->nullable();
            $table->string('subscriptionId')->nullable()->after('transactionId');
            $table->date('subscriptionActiveOn')->nullable();
            $table->date('accessTill')->nullable();
            $table->integer('subscriptionStatus')->nullable()->after('accessTill');
            $table->text('remark')->nullable()->after('subscriptionStatus');
            $table->text('subscriptionFeedback')->nullable()->after('remark');
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
            //
        });
    }
}
