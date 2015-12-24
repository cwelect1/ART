<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class ProfileController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions
  }

  public function loadPage(Request $request){

    $nav = new Helper;

    $runs = $this->getRuns();

    return view('user.profile')
      ->with(['runs' =>$runs,
              'nav' => $nav->buildNavMenu(),
            ]);
  }

  /**
  * Get runs within x # of days. /
  */
  public function getRuns() {
    // Get all the test runs
    // Sort in descending order by id
    $runs = new \App\Run();

    return $runs->getRunsWithinXDays(90);
  }

  /**
  * Get suites for a set of runs. /
  */
  public function getSuites($runs) {
    // Get all the test suites
    
    $results = new \Illuminate\Database\Eloquent\Collection;

    foreach($runs as $run){

      $results->add();

    }

    return $runs->getRunsWithinXDays(90);
  }
}