<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStreakAndXpToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('xp')->default(0)->index()->after('avatar');
            $table->integer('current_streak')->default(0)->after('xp');
            $table->integer('longest_streak')->default(0)->after('current_streak');
            $table->date('last_activity_date')->nullable()->after('longest_streak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['xp']);
            $table->dropColumn(['xp', 'current_streak', 'longest_streak', 'last_activity_date']);
        });
    }
}
