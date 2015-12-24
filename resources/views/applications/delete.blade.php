@extends('layouts.masterEdit')

@section('title')
    <title>Automation Reporting Tool - Delete Application</title>
@stop

<!-- This page is ugly man!
     Please do us some justice and fix it.
-->

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-12 placeholder">
              <div id="delete-div"> 
              <h1>Delete Application</h1>
              <p>Are you sure you want to delete <em>{{$app->name}}</em>?</p>
              <a href='/applications/delete/{{$app->id}}'><button type="button" class="btn btn-primary">Yes</button></a>
              <a  href="/applications/"><button type="button" class="btn btn-primary">Cancel</button></a>
            </div>
          </div>
        </div>
@stop