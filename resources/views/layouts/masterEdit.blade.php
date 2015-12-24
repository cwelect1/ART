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
    @if(\Session::has('flash_message'))
    <div class='flash_message'>
        {{ \Session::get('flash_message') }}
    </div>
    @endif
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
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
      @yield('navMenu')
      @yield('content')
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>