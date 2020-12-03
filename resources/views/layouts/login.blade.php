
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>

   <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('login/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/stylereg.css')}}">
</head>
<body>
<div class="main">
@yield('content')
</div>
  <!-- JS -->
  <script src="{{ asset('login/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('login/js/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('login/js/mainreg.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>