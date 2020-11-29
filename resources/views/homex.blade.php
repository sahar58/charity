@extends('layouts.app')

@section('content')
<head>
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ابداع تـك</title>
    <!--wow plugin file-->
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
    
   
</head>

<!-- ////////////////////////carousel section///////////////////////// -->
<div id="first-carousel" class=" carousel slide " data-ride="carousel">
    

    <div class="carousel-inner" role="listbox">

        
        <!--carousel Inner body images-->
        <div class="carousel-item active">
            <img class="sliderImage" src="{{ asset('homepage/img//carousel1.jpg') }}" width="1400" height="500">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('homepage/img/carousel2.jpg') }}" width="1400" height="500">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('homepage/img/carousel3.jpg') }}" width="1400" height="500">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('homepage/img/carousel4.jpg') }}" width="1400" height="500">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('homepage/img/carousel5.jpg') }}" width="1400" height="500">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('homepage/img/carousel6.jpg') }}" width="1400" height="500">
        </div>
        <button class="btn">تبرع الان</button>

        <!--carousel controls-->

        <a class="carousel-control-prev" href="#first-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#first-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

        <!-- indicators  -->
        <ol class="carousel-indicators">
            <li data-target="#first-carousel" data-slide-to="0" class="active">
            </li>
            <li data-target="#first-carousel" data-slide-to="1"></li>
            <li data-target="#first-carousel" data-slide-to="2"></li>
            <li data-target="#first-carousel" data-slide-to="3"></li>
            <li data-target="#first-carousel" data-slide-to="4"></li>
            <li data-target="#first-carousel" data-slide-to="5"></li>
        </ol>
    </div>


<!-- /////////////////////////End of carousel section///////////////////////// -->


<!-- ///////////////////////// Side Social Media Menue///////////////////////// -->
<div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<!-- //////////////////// End of Side Social Media Menue/////////////////// -->


<section id="about">
     <div class="container">
        <h1 class="headline text-center">من التقاء؟</h1>
        <hr class="hr-line" />
         <div class="row">
             <div class="col-md-12 col-sm-12">
                 <div class="caption">
                     <h1></h1>
                     <p>منظمة مصرية أهلية، غير حكومية، لا تهدف إلى الربح ولا تخضع لضرائب على التبرعات،
                        أنشئت عام 1993 مقيدة برقم 803 مركزية بوزارة التضامن الاجتماعي، تهدف إلى خدمة الفئات الأكثر احتياجًا،
                         دون أي تمييز ديني أو سياسي، وذلك بشكل مؤسسي متطور ويؤكد دور العمل الأهلي فى تنمية المجتمعات اقتصاديًا واجتماعيًا.
                        تعتمد الجمعية في تمويلها على التبرعات العينية والنقدية من المصريين داخل مصر وخارجها.</p>
                 </div>
             </div>
             <div class="w-100"></div>
             <a type="button" class="btn text-center work-btn" href="#">المزيد</a>
         </div>
     </div>
 </section>

 <section id="gallery">
    <h1 class="headline text-center">المعرض</h1>
    <hr class="hr-line" />
<div class="container-flex">
    <div class="row">
      <div class="col-md-6 col-sm-12">
          <div class="img-container">
              <img class="img-fluid" src="{{ asset('homepage/img/help1.jpg') }}">
          </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="img-container">
            <img class="img-fluid" src="{{ asset('homepage/img/help3.jpg') }}">
        </div>
    </div> 
    <div class="col-md-6 col-sm-12">
        <div class="img-container">
            <img class="img-fluid" src="{{ asset('homepage/img/help2.jpg') }}">
        </div>
    </div> 
    <div class="col-md-6 col-sm-12">
        <div class="img-container">
            <a type="button" class="gallery-btn">المزيد</a>
        </div>
    </div>
  </div>
</section>




<div class="container">
        <h1 class="headline text-center">الدعم المقدم</h1>
        <hr class="hr-line" />
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="card">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('homepage/img/learn2.jpeg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">دعم التعليم</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">التعليم هو مستقبل أي أمة باذن الله،
                                 فالشعب المتعلم هو الذي يستطيع ان يميز بين الافكار البناءة والافكار الهدامة.</p>
                            <button class="btn btn-indigo btn-rounded btn-md">Read more</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="card">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('homepage/img/learn2.jpeg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">دعم الصحه</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text"> نسعى معاً جاهدين إلى مكافحة الأمراض – المعدية
                                 مثل الأنفلونزا وفيروس العوز المناعي البشري،
                                 والأمراض غير السارية، من قبيل السرطان وأمراض القلب،
                                 ونساعد الأمهات والأطفال في البقاء على قيد الحياة</p>
                            <button class="btn btn-indigo btn-rounded btn-md">Read more</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="card">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('homepage/img/learn2.jpeg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">دعم الطعام</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">التعليم هو مستقبل أي أمة باذن الله،
                                 فالشعب المتعلم هو الذي يستطيع ان يميز بين الافكار البناءة والافكار الهدامة.</p>
                            <button class="btn btn-indigo btn-rounded btn-md">Read more</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>


            <div class="col-md-3 col-sm-3">
                <div class="card">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('homepage/img/learn2.jpeg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">دعم الملابس</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">التعليم هو مستقبل أي أمة باذن الله،
                                 فالشعب المتعلم هو الذي يستطيع ان يميز بين الافكار البناءة والافكار الهدامة.</p>
                            <button class="btn btn-indigo btn-rounded btn-md">Read more</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>

        </div>
    </div>




 <!--start testimonials-->
 <section class="testimonials">
        <h2 class="text-center">عملاء نفتخر بهم</h2>
        <hr class="hr-line" />
        <div class="testi py-5 mt-5">
            <div class="container">
                <div class="row slick2 py-5">
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr1.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr2.png') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr8.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr4.png') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr5.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr6.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr7.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr8.jpg') }}" alt="testi-img">
                    </div>
                    <div class="wow bounceInDown text-center">
                        <img src="{{ asset('homepage/img/chr9.png') }}" alt="testi-img">
                    </div>
                </div>
                <!--End slick-carousel-->
            </div>
            <!--End container-->
        </div>
        <!--End testi-->
    </section>
    <!--End Testimonials-->


 <!--Jquery file-->
    <script src="{{ asset('homepage/js/jquery-3.3.1.min.js') }}" defer ></script>
    <!--Owl js file-->
    <script src="{{ asset('homepage/js/slick.min.js') }}" defer ></script>
    <!--wow js file-->
    <script src="{{ asset('homepage/js/wow.min.js') }}" defer ></script>
    <!--Bootstrap js file-->
    <script src="{{ asset('homepage/js/popper.min.js') }}" defer ></script>
    <script src="{{ asset('homepage/js/bootstrap.min.js') }}" defer ></script>
    <!--Main css file-->
    <script  src="{{ asset('homepage/js/main.js') }}" defer ></script>


    @endsection
