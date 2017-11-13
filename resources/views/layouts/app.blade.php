<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Hng fun | @yield('title') </title>
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
<!--  ANIMATION SCRIPTS AND CSS !-->

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/waypoints.css') }}">
  <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('js/waypoints.js') }}" type="text/javascript"></script>
</head>

<body>
    @include('layouts.header')
  
    @yield('body')
    
    @include('layouts.footer')



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!--Customize javascript -->

   
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
