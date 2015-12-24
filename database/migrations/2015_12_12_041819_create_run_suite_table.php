<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunSuiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('run_suite', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('run_id')->unsigned();
            $table->integer('suite_id')->unsigned();
            $table->foreign('run_id')->references('id')->on('runs');
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
        Schema::drop('run_suite');
    }
}