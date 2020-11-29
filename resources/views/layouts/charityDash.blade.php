<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('charityPro/css/bootstrap.min.css') }} ">
	    <link rel="stylesheet" href="{{ asset('charityPro/css/boot.css') }} ">
      <link rel="stylesheet" href=" {{ asset('charityPro/css/style.css') }}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	         <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    {{ Auth::guard('charity')->user()->name }} <span class="caret"></span>
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

    
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="{{ asset('charityPro/js/html5shiv.min.js') }}" defer ></script>
   <script src="{{ asset('charityPro/js/jquery-3.5.1.min.js') }}" defer ></script>
   <script  src="{{ asset('charityPro/js/bootstrap.min.js') }}" defer ></script>

</body>
</html>