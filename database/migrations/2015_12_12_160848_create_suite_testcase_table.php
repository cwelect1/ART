<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiteTestcaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_testcase', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('testcase_id')->unsigned();
            $table->integer('suite_id')->unsigned();
            $table->foreign('testcase_id')->references('id')->on('testcases');
            $table->foreign('suite_id')->references('id')->on('suites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suite_testcase');
    }
}
