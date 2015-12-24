<?php

namespace App\helpers;

class Helper{

  public function buildNavMenu(){

  $buildNavMenu ='<div class="col-sm-3 col-md-2 sidebar">';

  $activePage = \Request::route()->getPath();//basename($_SERVER['PHP_SELF']);
  $header_count = 0;
  $menuItems = file('menu_items.txt');

  foreach($menuItems as $menuItem){
    
      $nav = explode(":", $menuItem);
      $page = trim($nav[0]);
      $link = trim($nav[1]);
      
      //if($link == 'Header'){
      if(starts_with($link, 'Header')){

        if($header_count >= 1){
          $buildNavMenu = $buildNavMenu . '</ul>';
        }

        $buildNavMenu = $buildNavMenu .  '<ul class="nav nav-sidebar">';
        $buildNavMenu = $buildNavMenu .  '<li><a href="' . substr($link, 7) .  '">' . $page . '</a></li>';

        $header_count++;

      }
      elseif($link == $activePage)
      {
          $buildNavMenu = $buildNavMenu .  '<li  class="active"><a>' . $page . '</a></li>';
      }
      else
      {
          $buildNavMenu = $buildNavMenu .  '<li><a href="' . $link .  '">' . $page . '</a></li>';
      }
  }
  $buildNavMenu = $buildNavMenu .  '</ul></div>';

  return $buildNavMenu;
}

  public function getChart($title, $chartType, $height, $width, $arrayColors, $datatTable){

    if ($chartType = 'PieChart'){

      \Lava::PieChart($title)
         ->setOptions(array(
           'datatable' => $datatTable,
           'legend' => \Lava::Legend(array(
              'position' => 'none'
              )),
            'chartArea' => \Lava::ChartArea([
                'width' => $width,
                'height' => $height
            ]),
            'colors' => ($arrayColors),
            'is3D' => true
          ));
    }
    elseif ($chartType = 'DonutChart'){


    }

  }

}

?>