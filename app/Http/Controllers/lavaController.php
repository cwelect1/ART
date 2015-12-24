<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts; 
use App\Helpers\Helper;

class lavaController extends Controller
{

  public function loadPage(Request $request){

    $this->getChart($request);
    $result = new Helper;
    //$result->buildNavMenuNew();
    return View('linechart')->with('result', $result->buildNavMenu());
  }

  public function getChart(Request $request){

    $reasons = \Lava::DataTable();

    $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Passed', 50))
            ->addRow(array('Failed', 30))
            ->addRow(array('Skipped', 20));

    $piechart = \Lava::PieChart('myPieChart')
                     ->setOptions(array(
                       'datatable' => $reasons,
                       'legend' => \Lava::Legend(array(
                          'position' => 'none'
                          )),
                        'chartArea' => \Lava::ChartArea([
                            'width' => 250,
                            'height' => 250
                        ]),
                        'colors' => (array('078B3E', 'CD1E35', 'FCDC27'))
                      ));

    $threedpiechart = \Lava::PieChart('myThreeDPieChart')
                     ->setOptions(array(
                       'datatable' => $reasons,
                       'legend' => \Lava::Legend(array(
                          'position' => 'none'
                          )),
                        'chartArea' => \Lava::ChartArea([
                            'width' => 250,
                            'height' => 250
                        ]),
                        'colors' => (array('368DB9', 'A41034', 'FCDC27')),
                        //'colors' => (array('CED665', 'A41034', 'FCD4A1')),
                        'is3D' => true
                      ));

    $donutchart = \Lava::DonutChart('myDonut')
                     ->setOptions(array(
                       'datatable' => $reasons,
                       'legend' => \Lava::Legend(array(
                          'position' => 'none'
                          )),
                        'chartArea' => \Lava::ChartArea([
                            'width' => 250,
                            'height' => 250
                        ]),
                        'colors' => (array('368DB9', 'A41034', 'FCDC27'))
                      ));
  }
}