<?php

use Illuminate\Database\Seeder;

class SuitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Master Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Doctoral Grades Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Smoke Test Suite',
          'parent_id' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Atlas - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Quick Codes - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Master Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Smoke Test Suite',
          'parent_id' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Atlas - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Quick Codes - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Master Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'MBA Grades Smoke Test Suite',
          'parent_id' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Atlas - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Quick Codes - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('suites')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'Quick Codes - Smoke Test Suite',
          'parent_id' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
