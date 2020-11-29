<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ابداع تـك</title>
    <!--wow plugin file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/animate.css') }}">
    <!--Bootstrap css file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/bootstrap.min.css') }}">
    <!--FontAwasem file-->

    <link rel="stylesheet" href=" {{ asset('dashbord/css/font-awesome.min.css') }}">
    <!--google-fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <!--Owl Carousel file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/slick-theme.css') }}">
    <!--Main css file-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/tabstyle.css') }}">
    
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
     <link rel="stylesheet" href=" {{ asset('dashbord/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <link href="https://maxcdn.bootstrapcdn..." rel="stylesheet">
<link href="https://cdnjs.cloudflare.co..." rel="stylesheet">
<script src="http://ajax.googleapis.com/..."></script>
<script src="https://maxcdn.bootstrapcdn..."></script>
<script src="https://cdnjs.cloudflare.co..."></script>
  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark primary-color  fixed-top" style="background:linear-gradient(90deg, #3c3b3f 0%,#605c3c 100% );;">
            <div class="container">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   
                    <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand">
                     <img src="{{ asset('homepage/img/logo-icon.png') }}" alt="logo"  >
                        <a>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">انشاء حساب</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل الخروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <!--##########################################
                    ###########################################
                    #####################################################-->
                </div>
            </div>
        </nav>
    </div>

        <main class="container-fluid py-4">
            @yield('content')
        </main>
   


<!-- footer ######################### -->

    <footer class="main-footer">
        <!-- main-footer -->
        <div class="footer-main">
            <div class="container">
                <div class="row">

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container text-center">
                eltkaa @ copyrights 2020 - by <a href="http://www.eltkaa.net" target="_blank">Funny Coders</a>
            </div>
        </div>
    </footer> <!-- main-footer -->
    
        <!--Jquery file-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js" defer ></script>
        <!--Owl js file-->
        <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer ></script>
        <!---databse -->
        <script   defer src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script  defer  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!--Main css file-->
        <script defer type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                <!-- Include Date Range Picker -->
         <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      
        <script src="{{ asset('dashbord/js/file.js') }}" defer ></script>
</body>
</html>
