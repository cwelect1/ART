@extends('layouts.masterEdit')

@section('title')
    <title>Automation Reporting Tool - Edit Application</title>
@stop

<!-- This page is ugly man!
     Please do us some justice and fix it.
-->
@section('form')
        <form class="form-inline" method="POST" action="/applications/edit">

        <input type="hidden" value='{{ csrf_token() }}' name='_token'>
        <input type='hidden' name='id' value='{{ $app->id }}'>

        <div class='form-group'>
            <label>Name:</label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{ $app->name }}'
            >

            <label>Acronym:</label>
            <input
                type='text'
                id='acronym'
                name='acronym'
                value='{{ $app->acronym }}'
            >

            <label>Description:</label>
            <input
                type='text'
                id='description'
                name='description'
                value='{{ $app->description }}'
            >
        </div>

        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="/applications/"><button type="button" class="btn btn-primary">Cancel</button></a>
    </form>
@stop

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-12 placeholder">
              <div id="delete-div"> 
              <h1>Edit an Application</h1>
              <br>
              <br>
              @yield('form')
            </div>
          </div>
        </div>
@stop