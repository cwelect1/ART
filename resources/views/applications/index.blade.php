@extends('layouts.masterEdit')

@section('title')
    <title>Automation Reporting Tool</title>
@stop

@section('PageHeading')
    <h1 class="page-header">Applications Management</h1>
@stop

@section('navMenu')
    <?php echo $nav ?>
@stop

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('PageHeading')
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-12 placeholder">
              <div id="runs-div" class="text-left"> 
              <a href="/applications/create">Add New Application</a>
              <br>
              <br>
              <div class="table-responsive">
                <table class="table table-striped text-left">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Acronym</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($applications as $application)
                    <tr>
                      <td>{{ $application->name }}</td>
                      <td>{{ $application->acronym }}</td>
                      <td>{{ $application->description }}</td>
                      <td><a href="/applications/edit/{{ $application->id }}"><img src="/pencil.png" alt="x"></a></td>
                      <td><a href="/applications/confirm-delete/{{ $application->id }}"><img src="/delete.png" alt="x"></a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
@stop