<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table.
        Schema::create('testcases', function (Blueprint $table) {

            # PK, Autoincrement and 'created_at'/'updated_at' fields.
            $table->increments('id');
            $table->timestamps();

            # The rest of the fields...
            $table->string('name');
            $table->string('class')->nullable();
            $table->string('method')->nullable();
            $table->integer('tc_number')->nullable();
            $table->dateTime('start_date_time')->nullable();
            $table->dateTime('end_date_time')->nullable();
            $table->integer('status');
            $table->string('parameters')->nullable();
            $table->string('messages')->nullable();
            $table->string('failure_msg')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table.
        Schema::drop('testcases');
    }
}
