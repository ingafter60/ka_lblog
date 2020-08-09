<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="{{ URL::asset ('test/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset ('test/css/mdb.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset ('test/css/style.css') }}">
</head>
<body>

  <!-- NAVBAR -->
  @include('layouts.inc.navbar')

  <!-- MAIN CONTENT -->
  <div class="container">
    @yield('content')
  </div>

  <!-- FOOTER -->
  @include('layouts.inc.footer')

  <script type="text/javascript" src="{{ URL::asset ('test/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset ('test/js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset ('test/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset ('test/js/mdb.min.js') }}"></script>
  <script type="text/javascript"></script>

</body>
</html>