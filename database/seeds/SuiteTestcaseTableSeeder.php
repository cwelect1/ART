<?php

use Illuminate\Database\Seeder;

class SuiteTestcaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
     
    $suite = \App\Suite::find(2);
    $suite->testcases()->save(\App\Testcase::find(38));
    
    $suite = \App\Suite::find(2);
    $suite->testcases()->save(\App\Testcase::find(39));
    
    $suite = \App\Suite::find(2);
    $suite->testcases()->save(\App\Testcase::find(40));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(1));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(10));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(13));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(16));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(25));
    
    $suite = \App\Suite::find(3);
    $suite->testcases()->save(\App\Testcase::find(35));
   
    $suite = \App\Suite::find(4);
    $suite->testcases()->save(\App\Testcase::find(3));
    
    $suite = \App\Suite::find(5);
    $suite->testcases()->save(\App\Testcase::find(5));
    
    $suite = \App\Suite::find(5);
    $suite->testcases()->save(\App\Testcase::find(6));
    
    $suite = \App\Suite::find(5);
    $suite->testcases()->save(\App\Testcase::find(7));
    
    $suite = \App\Suite::find(5);
    $suite->testcases()->save(\App\Testcase::find(8));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(2));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(11));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(14));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(23));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(26));
    
    $suite = \App\Suite::find(7);
    $suite->testcases()->save(\App\Testcase::find(36));
    
    $suite = \App\Suite::find(8);
    $suite->testcases()->save(\App\Testcase::find(4));
    
    $suite = \App\Suite::find(9);
    $suite->testcases()->save(\App\Testcase::find(17));
    
    $suite = \App\Suite::find(9);
    $suite->testcases()->save(\App\Testcase::find(18));
    
    $suite = \App\Suite::find(9);
    $suite->testcases()->save(\App\Testcase::find(19));
    
    $suite = \App\Suite::find(9);
    $suite->testcases()->save(\App\Testcase::find(20));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(9));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(12));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(15));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(24));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(31));
    
    $suite = \App\Suite::find(11);
    $suite->testcases()->save(\App\Testcase::find(37));
    
    $suite = \App\Suite::find(12);
    $suite->testcases()->save(\App\Testcase::find(34));
    
    $suite = \App\Suite::find(13);
    $suite->testcases()->save(\App\Testcase::find(21));
    
    $suite = \App\Suite::find(13);
    $suite->testcases()->save(\App\Testcase::find(22));
    
    $suite = \App\Suite::find(13);
    $suite->testcases()->save(\App\Testcase::find(27));
    
    $suite = \App\Suite::find(13);
    $suite->testcases()->save(\App\Testcase::find(28));
     
    $suite = \App\Suite::find(14);
    $suite->testcases()->save(\App\Testcase::find(29));
    
    $suite = \App\Suite::find(14);
    $suite->testcases()->save(\App\Testcase::find(30));
    
    $suite = \App\Suite::find(14);
    $suite->testcases()->save(\App\Testcase::find(32));
   
    $suite = \App\Suite::find(14);
    $suite->testcases()->save(\App\Testcase::find(33));
  }
}
