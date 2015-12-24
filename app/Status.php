<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  // Relationship with Runs table.
  public function runs(){

    return $this->hasMany('\App\Run');
  }

  // Relationship with Suites table.
  public function suites(){

    return $this->hasMany('\App\Suite');
  }

  // Relationship with Cases table.
  public function cases(){

    return $this->hasMany('\App\Case');
  }

}
