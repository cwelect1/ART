@extends('layouts.masterDashboard')

@section('title')
    <title>ART - Run #{{ $run->id }}</title>
@stop

@section('PageHeading')
    <h1 class="page-header">{{ $run->name }} - {{ $run->description }}</h1>
@stop

@section('navMenu')
    <?php echo $nav ?>
@stop
