<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  // Relationship with Runs table.
  public function testcases(){

    return $this->hasMany('\App\Testcase');
  }
}
