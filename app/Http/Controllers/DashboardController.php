<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class DashboardController extends Controller
{
  public function __construct(Request $request) {
      # Put anything here that should happen before any of the other actions
  }

  public function loadPage(Request $request){

    $runs = $this->getRuns();
    
    $testTotals = $this->getTestResultTotals($runs);

    $this->getCharts($testTotals);

    $nav = new Helper;

    return view('runs.index')
      ->with(['runs' =>$runs,
              'nav' => $nav->buildNavMenu(),
            ]);
  }

  /**
  * Get runs within x # of days. /
  */
  public function getRuns() {
    // Get all the test runs
    // Sort in descending order by id
    $runs = new \App\Run();

    return $runs->getRunsWithinXDays(90);
  }

  public function getCharts($testResultTotals){

    $chart = new Helper;

    $smoke = \Lava::DataTable();
    $integration = \Lava::DataTable();
    $regression = \Lava::DataTable();

    $smoke->addStringColumn('TestResults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', $testResultTotals['Passed']))
            ->addRow(array('Failed', $testResultTotals['Failed']))
            ->addRow(array('Skipped', $testResultTotals['Skipped']));

    $integration->addStringColumn('TestResults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 90))
            ->addRow(array('Failed', 5))
            ->addRow(array('Skipped', 5));

    $regression->addStringColumn('TestTesults')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 82))
            ->addRow(array('Failed', 18))
            ->addRow(array('Skipped', 20));


    $chart->getChart('SmokeTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $smoke);
    $chart->getChart('IntegrationTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $integration);
    $chart->getChart('RegressionTestChart', 'PieChart', 250, 250, array('078B3E', 'CD1E35', 'FCDC27'), $regression);

  }

  /**
  * 
  */
  public function getTestResultTotals($testRunData){

    $totalCases = 0;
    $totalPassed = 0;
    $totalFailed = 0;
    $totalSkipped = 0;

    foreach($testRunData as $run){
    
      $passed = 0;
      $failed = 0;
      $skipped = 0;
      $totalCasesPerRun = 0;

      foreach($run->suites as $suite){
        foreach($suite->testcases as $testcase){
        
          $totalCasesPerRun++;

          if($testcase->status == 1){
            $passed++;
          }
          elseif($testcase->status == 2){
            $failed++;
          }
          elseif ($testcase->status == 3){
            $skipped++;
          }
        }
      }
      $totalCases = $totalCases + $totalCasesPerRun;
      $totalPassed = $totalPassed + $passed;
      $totalFailed = $totalFailed + $failed;
      $totalSkipped = $totalSkipped + $skipped;
    }

    $results = array('TotalCases' => $totalCases);
    $results['Passed'] = $totalPassed;
    $results['Failed'] = $totalFailed;
    $results['Skipped'] = $totalSkipped;

    return $results;
  }
}