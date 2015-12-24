<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectApplicationsAndTestcases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Link Application records with runs.
        Schema::table('testcases', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('application_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');

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

            $table->dropForeign('testcases_application_id_foreign');

            $table->dropColumn('application_id');
        });
    }
}
