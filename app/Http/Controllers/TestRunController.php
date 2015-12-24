<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class TestRunController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions
  }

  public function loadPage($id = null){

    $runModel = new \App\Run();

    $run = $runModel->getRun($id);
    
    if(is_null($run)) {
      \Session::flash('flash_message','Run not found.');
      return redirect('/');
    }

    $nav = new Helper;

    return view('runs.single')
      ->with(['nav' => $nav->buildNavMenu(),
              'run' => $run,
            ]);
  }
}