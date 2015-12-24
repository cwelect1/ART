<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEnvironmentsAndRuns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Link Application records with runs.
        Schema::table('runs', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('environment_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('environment_id')->references('id')->on('environments');

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
        Schema::table('runs', function (Blueprint $table) {

            $table->dropForeign('runs_environment_id_foreign');

            $table->dropColumn('environment_id');
        });
    }
}
