<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  // Relationship with Runs table.
  public function runs(){

    return $this->hasMany('\App\Run');
  }
}
