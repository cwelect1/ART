<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'MBA',
          'name' => 'MBA'
        ]);
    
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'DOC',
          'name' => 'Doctoral'
        ]);
    
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'EE',
          'name' => 'Executive Education'
        ]);
    
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'ER',
          'name' => 'External Relations'
        ]);
    
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'FIN',
          'name' => 'Finance'
        ]);
    
        DB::table('partners')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'acronym' => 'OPS',
          'name' => 'Operations'
        ]);
    }
}
