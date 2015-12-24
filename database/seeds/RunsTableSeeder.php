<?php

use Illuminate\Database\Seeder;

class RunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //$partner_id = \App\Partner::where('acronym','=','MBA')->pluck('id');
      //$application_id = \App\Application::where('acronym','=','MBAGrades')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');

      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #1',
        'description' => 'MBA Grades Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','MBA')->pluck('id');
      $application_id = \App\Application::where('acronym','=','MBAGrades')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #2',
        'description' => 'MBA Grades Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','MBA')->pluck('id');
      $application_id = \App\Application::where('acronym','=','MBAGrades')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #3',
        'description' => 'MBA Grades Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','DOC')->pluck('id');
      $application_id = \App\Application::where('acronym','=','DOCGrades')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #4',
        'description' => 'Doctoral Grades Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','EE')->pluck('id');
      $application_id = \App\Application::where('acronym','=','Atlas')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #5',
        'description' => 'Atlas Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','EE')->pluck('id');
      $application_id = \App\Application::where('acronym','=','Atlas')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #6',
        'description' => 'Atlas Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','EE')->pluck('id');
      $application_id = \App\Application::where('acronym','=','Atlas')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #7',
        'description' => 'Atlas Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','OPS')->pluck('id');
      $application_id = \App\Application::where('acronym','=','QuickCodes')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #8',
        'description' => 'Quick Codes Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','OPS')->pluck('id');
      $application_id = \App\Application::where('acronym','=','QuickCodes')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #9',
        'description' => 'Quick Codes Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','OPS')->pluck('id');
      $application_id = \App\Application::where('acronym','=','QuickCodes')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #10',
        'description' => 'Quick Codes Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);

      $partner_id = \App\Partner::where('acronym','=','OPS')->pluck('id');
      $application_id = \App\Application::where('acronym','=','QuickCodes')->pluck('id');
      $environment_id = \App\Environment::where('name','=','CEE')->pluck('id');
      DB::table('runs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Test Run #11',
        'description' => 'Quick Codes Smoke Tests',
        'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
        'environment_id' => $environment_id
      ]);
    }
}
