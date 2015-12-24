<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suite extends Model
{
  // Relationships 

  public function applications(){

    return $this->hasOne('\App\Status');
  }

  public function runs(){

    return $this->belongsTo('\App\Run');
  }

  public function testcases(){

    return $this->belongsToMany('\App\Testcase');
  }
}
