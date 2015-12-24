<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{

  /*
  *****************************
        Relationships 
  *****************************
  */
  public function environments(){

    return $this->hasOne('\App\Environment');
  }

  public function partners(){

    return $this->hasOne('\App\Partner');
  }

  public function suites(){

    return $this->belongsToMany('\App\Suite');
  }

  /*
  *****************************
        Custom Functions 
  *****************************
  */
  public function getRunsWithinXDays($days){

    return $this->where('start_date_time','>=',\Carbon\Carbon::now()->subDays($days))->with('suites.testcases')->orderBy('id','DESC')->get();
  }
  
  public function getRunsForDropdown() {

    $runs = $this->orderby('id','DESC')->get();

    $runs_for_dropdown = [];

    foreach($runs as $run) {

      $runs_for_dropdown[$run->id] = $run->name . ' (id=' . $run->id . ')';
    }

    return $runs_for_dropdown;
  }

  public function getRun($id){

    //dd($this->with('suites.testcases')->find($id));
  return $this->with('suites.testcases')->find($id);
  }
}
