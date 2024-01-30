<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSectionIdToBatchContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('batch_contents', function (Blueprint $table) {
            $table->unsignedBigInteger('sectionId')->nullable();
            $table->integer('order')->nullable();
            $table->integer('accessTill')->default(0)->nullable();
            $table->date('accessTillDate')->nullable();
            $table->date('accessOnDate')->nullable();
            $table->integer('accessOn')->default(0)->nullable();
            $table->foreign('sectionId')->references('id')->on('batch_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('batch_contents', function (Blueprint $table) {
            $table->dropForeign(['sectionId']);
            $table->dropColumn('batchId');
        });
    }
}
