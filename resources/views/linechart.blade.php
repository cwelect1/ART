@extends('layouts.lavaMaster')

@section('title')
    <title>Automation Reporting Tool</title>
@stop

@section('navMenu')
    <?php echo $result ?>
    <!--<?php
      //use App\helpers\Helper;
      //Helper::buildNavMenu();
    ?>-->
@stop

@section('ChartUno')
    
<?php echo \Lava::render('PieChart', 'myPieChart', 'chart-div') ?>

@stop

@section('ChartDos')
    
<?php echo \Lava::render('PieChart', 'myThreeDPieChart', 'chart2-div') ?>

@stop

@section('ChartTres')
    
<?php echo \Lava::render('DonutChart', 'myDonut', 'chart3-div') ?>

@stop