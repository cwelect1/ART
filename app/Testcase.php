<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testcase extends Model
{
  // Relationship with Status table.
  public function applications(){

    return $this->hasOne('\App\Application');
  }

  // Relationship with Suites table.
  public function suites(){

    return $this->belongsTo('\App\Suite');
  }
}
