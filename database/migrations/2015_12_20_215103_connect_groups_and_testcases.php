<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectGroupsAndTestcases extends Migration
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
            $table->integer('group_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

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

            $table->dropForeign('testcases_group_id_foreign');

            $table->dropColumn('group_id');
        });
    }
}
