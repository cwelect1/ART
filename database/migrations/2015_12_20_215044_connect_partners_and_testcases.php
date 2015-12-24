<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectPartnersAndTestcases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Link Partner records with runs.
        Schema::table('testcases', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('partner_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the relationship.
        Schema::table('testcases', function (Blueprint $table) {

            $table->dropForeign('testcases_partner_id_foreign');

            $table->dropColumn('partner_id');
        });
    }
}
