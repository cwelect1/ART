<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class AddEditDeleteController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions
  }

  public function loadPage(Request $request){

    $nav = new Helper;
    $runsModel = new \App\Run();
    
    //$runs = $this->getRuns();
    $runs = $runsModel->getRunsWithinXDays(90);
    $runs_for_dropdown = $runsModel->getRunsForDropdown();

    return view('Admin.edit')
      ->with(['runs' =>$runs,
              'nav' => $nav->buildNavMenu(),
              'runs_for_dropdown' => $runs_for_dropdown,
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
}