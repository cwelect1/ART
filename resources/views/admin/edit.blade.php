@extends('layouts.masterEdit')

@section('title')
    <title>ART - Edit</title>
@stop

@section('navMenu')
    <?php echo $nav ?>
@stop

@section('content')

  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Editing</h1>
          <p>data is restricted to the last 90 days</p>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Test Runs</h4>
              <div id="runs-div"> 
                <select name='runs' id='runs'>
                  <option value=''>Choose a run...</option>
                    @foreach($runs_for_dropdown as $run_id => $run_name)
                        <option value='{{ $run_id }}'> {{ $run_name }} </option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Test Suites</h4>
              <div id="suites-div"> 
                
              </div>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <h4>Test Cases</h4>
              <div id="cases-div"> 
                
              </div>
            </div>
          </div>
          
          <div class="table-responsive">
          @yield('tabular-content')
          </div>

@stop