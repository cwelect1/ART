<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestRun extends Model
{
    //
    public function getRuns() {
      # Returns all test runs
      $runs = \App\TestRun::all();

      return $runs;//$this->belongsTo('\App\Author');
  }
}
