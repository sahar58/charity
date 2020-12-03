<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'charity') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homepage/css/animate.css') }}" rel="stylesheet">
    
    <!--Bootstrap css file-->
    <link href="{{ asset('homepage/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!--FontAwasem file-->
    <link href="{{ asset('homepage/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!--google-fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <!--Owl Carousel file-->
    <link href="{{ asset('homepage/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('homepage/css/slick-theme.css') }}" rel="stylesheet">
    
    <!--Main css file-->
    <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark primary-color  fixed-top" >
            <div class="container">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   
                    <ul class="navbar-nav ml-auto">
                    <a class="navbar-brand">
                     <img src="{{ asset('homepage/img/logo-icon.png') }}" alt="logo"  >
                        <a>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('charity.login') }}">تسجيل الدخول</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">انشاء حساب</a>
                                </li>
                            @endif
                        @else
                        

                            <li class="nav-item">
                                    <a class="nav-link squared-block" href="{{ route('publicSearch') }}">البحث</a>
                                </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('charity')->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('charProfile') }}"  >
                                        الملف الشخصى
                                    </a>
                                   
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
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('charity.login') }}">الرئيسيه
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                           

                        </ul>
                    <!-- Links -->
                                        </div>
                                        <!-- Collapsible content -->
                                    

                        </ul>   
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


<!-- footer ######################### -->

<footer class="main-footer">
        <!-- main-footer -->
        <div class="footer-main">
            <div class="container">
                <div class="row">

                    <div class="col-md-5">
                        <div class="footer-col">
                            <div class="footer-content">
                                <h4 class="footer-title">تواصل معنا <span class="title-under"></span></h4>
                                <div class="footer-form">
                                    <form action="php/mail.php" class="ajax-form">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="الاسم"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="البريد الالكترونى" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="رسالتك"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send
                                                message</button>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class=icon-col text-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-col">
                            <div class="footer-content col-serv">
                                <ul>
                                    <a href="#">
                                        <li>التبرعات</li>
                                    </a>
                                    <a href="#">
                                        <li>التقائتنا</li>
                                    </a>
                                    <a href="#">
                                        <li>القوافل</li>
                                    </a>
                                    <a href="#">
                                        <li> شركائنا</li>
                                    </a>
                                    <a href="#">
                                        <li>سياسات الخصوصيه</li>
                                    </a>
                                    <a href="#">
                                        <li>النشاطات</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-col">
                            <div class="footer-content footer-contact">
                                <img src="{{ asset('homepage/img/logo.png') }}" alt="eltkaa" class="logo-footer">
                                <p>..تواصلكم معنا ينقذ حياه </p>
                                <p>تليفون : 19099</p>
                                <p>contact_us@eltkaa.net</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container text-center">
                eltkaa @ copyrights 2020 - by <a href="" target="_blank" style="color: #c5c5c5;">Funny Coders</a>
            </div>
        </div>
    </footer> <!-- main-footer -->
    <script src="{{ asset('homepage/js/bootstrap.min.js') }}" defer ></script>
</body>
</html>
