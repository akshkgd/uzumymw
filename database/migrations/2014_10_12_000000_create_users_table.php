<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
            $table->string('name');
            $table->string('google_id')->nullable();
            $table->string('email')->unique();
            $table->integer('is_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('gender')->nullable();
            $table->integer('role')->default(0); //o is for student
            $table->string('password')->nullable();
            $table->string('avatar')->default('assets/img/mask.svg');
            $table->integer('status')->default(1); //0 will deactivate the account
            $table->string('coupan')->unique()->nullable();
            $table->timestamp("lastActivity")->useCurrent();
            $table->text('bio')->nullable();
            $table->string('telegramId')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->string('field5')->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
