<?php

use Illuminate\Database\Seeder;

class RunSuiteTableSeeder extends Seeder
{
  // Map test suites to test runs.
  public function run(){
    
    $run = \App\Run::find(1);
    $run->suites()->save(\App\Suite::find(3));
    
    $run = \App\Run::find(2);
    $run->suites()->save(\App\Suite::find(7));

    $run = \App\Run::find(3);
    $run->suites()->save(\App\Suite::find(11));

    $run = \App\Run::find(4);
    $run->suites()->save(\App\Suite::find(2));

    $run = \App\Run::find(5);
    $run->suites()->save(\App\Suite::find(4));
  
    $run = \App\Run::find(6);
    $run->suites()->save(\App\Suite::find(8));
  
    $run = \App\Run::find(7);
    $run->suites()->save(\App\Suite::find(12));
  
    $run = \App\Run::find(8);
    $run->suites()->save(\App\Suite::find(5));
  
    $run = \App\Run::find(9);
    $run->suites()->save(\App\Suite::find(9));
  
    $run = \App\Run::find(10);
    $run->suites()->save(\App\Suite::find(13));
  
    $run = \App\Run::find(11);
    $run->suites()->save(\App\Suite::find(14));
  }
}
