<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ART is a tool for orgnazing, displaying, and editing automation test results.">
    <meta name="author" content="Corbett Weinberg">
    <link rel="icon" href="../../favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <!--@yield("customCSS", "<link href=\"/css/main.css\" rel=\"stylesheet\">")-->
    @yield('title')
  </head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HBS Automation Reporting Tool</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/applications">App Mgmt</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
      @yield('navMenu')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('PageHeading')

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
              <div id="chart-div"> 
                @yield('SmokeTestChart')
              </div>
              <h4>Smoke Tests</h4>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <div id="chart2-div"> 
                @yield('IntegrationTestChart')
              </div>
              <h4>Integration Tests</h4>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <div id="chart3-div"> 
                @yield('RegressionTestChart')
              </div>
              <h4>Regression Tests</h4>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Run #</th>
                  <th>Description</th>
                  <th>Test Cases</th>
                  <th>Pass</th>
                  <th>Fail</th>
                  <th>Skipped</th>
                </tr>
              </thead>
              <tbody>
              @yield('tableRow')
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>