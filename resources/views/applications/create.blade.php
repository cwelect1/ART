@extends('layouts.masterEdit')

@section('title')
    <title>Automation Reporting Tool - Add Application</title>
@stop

<!-- This page is ugly man!
     Please do us some justice and fix it.
-->
@section('form')
        <form class="form-inline" method="POST" action="/applications/create">

        <input type="hidden" value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>Name:</label>
            <input
                type='text'
                id='name'
                name='name'
            >

            <label>Acronym:</label>
            <input
                type='text'
                id='acronym'
                name='acronym'
            >

            <label>Description:</label>
            <input
                type='text'
                id='description'
                name='description'
            >
        </div>

        <button type="submit" class="btn btn-primary">Add application</button>
    </form>
@stop

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-12 placeholder">
              <div id="delete-div"> 
              <h1>Add an Application</h1>
              <br>
              <br>
              @yield('form')
            </div>
          </div>
        </div>
@stop