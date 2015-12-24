<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'MBAGrades',
          'name' => 'MBA Grades',
          'description' => 'Application to allow faculty to Grade MBA students and for students to view their Grades.'
        ]);

        DB::table('applications')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'DOCGrades',
          'name' => 'Doctoral Grades',
          'description' => 'Application to allow faculty to Doctoral students and for students to view their Grades.'
        ]);

        DB::table('applications')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'Atlas',
          'name' => 'Atlas (Salesforce)',
          'description' => 'Executive Education CRM application.'
        ]);

        DB::table('applications')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'QuickCodes',
          'name' => 'QuickCodes',
          'description' => 'Operations Quick Codes.'
        ]);

    }
}
