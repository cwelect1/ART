<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table.
        Schema::create('partners', function (Blueprint $table) {

            # PK, Autoincrement and 'created_at'/'updated_at' fields.
            $table->increments('id')->unsigned();
            $table->timestamps();

            # The rest of the fields...
            $table->string('acronym');
            $table->string('name');
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
        Schema::drop('partners');
    }
}
