<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class ApplicationsController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions

  }

  public function loadPage(){

    $applications = $this->getIndex();

    $nav = new Helper;

    return view('applications.index')
          ->with(['applications' =>$applications,
                'nav' => $nav->buildNavMenu(),
              ]);
  }

  /**
  * Responds to requests to GET /applications
  */
  public function getIndex() {
    // Get all the applications.
    $apps = \App\Application::orderBy('name','ASC')->get();

    return $apps;
  }

   /**
   * Responds to requests to GET /applications/create
   */
  public function getCreate(Request $request) {

    return view('applications.create');
  }

  /**
   * Responds to requests to POST /applications/create
   */
  public function postCreate(Request $request) {

    $this->validate(
        $request,
        [
            'name' => 'required|min:2',
            'acronym' => 'required|min:2',
            'description' => 'required|min:4',
          ]
    );

    # Insert a new application in the DB
    $app = new \App\Application();
    $app->name = $request->name;
    $app->acronym = $request->acronym;
    $app->description = $request->description; 

    $app->save();

    \Session::flash('flash_message','Your application was added!');

    return redirect('/applications');
  }

  /**
   * Responds to requests to GET /applications/edit
   */
  public function getEdit(Request $request) {

    $app = \App\Application::find($request->id);

    return view('applications.edit')->with('app', $app);
  }
  
  /**
  * Responds to requests to POST /applications/edit
  */
  public function postEdit(Request $request) {
    
    $this->validate(
        $request,
        [
            'name' => 'required|min:2',
            'acronym' => 'required|min:2',
            'description' => 'required|min:4',
          ]
    );

    $app = \App\Application::find($request->id);
    $app->name = $request->name;
    $app->description = $request->description;
    $app->acronym = $request->acronym;

    $app->save();

    \Session::flash('flash_message','Your application was updated.');

    return redirect('/applications/edit/'.$request->id);
  }

  public function getConfirmDelete($app_id) {

    $nav = new Helper;

    $app = \App\Application::find($app_id);

    return view('applications.delete')->with('app', $app);
  }

  /**
  *
  */
  public function getDoDelete($app_id) {

    $app = \App\Application::find($app_id);

    if(is_null($app)) {
        \Session::flash('flash_message','Application not found.');
        return redirect('\applications');
    }

    // NEED to do a Cascading delete to remove related test cases. Change this code!

    if($app->testcases()) {
        $app->testcases()->delete();
    }

    $app->delete();

    \Session::flash('flash_message',$app->name.' was deleted.');

    return redirect('/applications');
  }
}