<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Site Title -->
    <title>Constructly - Commercial Constuction Managment Platform</title>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    
    <!-- Icon-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}">

   
    @yield('header')
     <!-- Custom styles -->
    {{-- Inheriting CSS --}}
  </head>
<body>

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>

    @if ( Config::get('app.debug') )
        <script type="text/javascript">
            document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script> 
    @endif
</body>
</html>