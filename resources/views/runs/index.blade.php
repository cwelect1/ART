@extends('layouts.masterDashboard')

@section('title')
    <title>Automation Reporting Tool</title>
@stop

@section('PageHeading')
    <h1 class="page-header">Dashboard</h1>
@stop

@section('navMenu')
    <?php echo $nav ?>
    <!--<?php
      //use App\helpers\Helper;
      //Helper::buildNavMenu();
    ?>-->
@stop

@section('SmokeTestChart')
    
<?php echo \Lava::render('PieChart', 'SmokeTestChart', 'chart-div') ?>

@stop

@section('IntegrationTestChart')
    
<?php echo \Lava::render('PieChart', 'IntegrationTestChart', 'chart2-div') ?>

@stop

@section('RegressionTestChart')
    
<?php echo \Lava::render('PieChart', 'RegressionTestChart', 'chart3-div') ?>

@stop

@section('tableRow')

  @if(sizeof($runs) == 0)
      <?php echo 'There are no test runs.' ?>
  @else
      @foreach($runs as $run)
      <?php
        $passed = 0;
        $failed = 0;
        $skipped = 0;
        $numCases = 0;
      ?>
        @foreach($run->suites as $suite)
          @foreach($suite->testcases as $testcase)
          
          <?php $numCases++; ?>

          @if($testcase->status == 1)
            <?php $passed++; ?>

          @elseif($testcase->status == 2)
            <?php $failed++; ?>
          
          @elseif ($testcase->status == 3)
            <?php $skipped++; ?>
          
          @endif
          @endforeach
        @endforeach
        
          <tr>
              <td><a href='/testrun/{{ $run->id }}'>{{ $run->id }}</a></td>
              <td>{{ $run->description }}</td>
              <td>{{ $numCases }}</td>
              
              @if($passed == 0)
              <td>-</td>
              @else
              <td>{{ $passed }}</td>
              @endif

              @if($failed == 0)
              <td>-</td>
              @else
              <td>{{ $failed }}</td>
              @endif
              
              @if ($skipped == 0)
              <td>-</td>
              @else
              <td>{{ $skipped }}</td>
              @endif

          </tr>
      @endforeach
  @endif

@stop
