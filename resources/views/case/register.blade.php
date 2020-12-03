@extends('layouts.charityDash')

@section('content')

<head>
    
   
	    
<link rel="icon" type="image/png" href="{{ asset('login/img/favicon.ico') }}"/>

<link href="{{ asset('login/css/stylereg.css') }}" rel="stylesheet">
<link href="{{ asset('login/fonts/iconic/css/icon.css') }}" rel="stylesheet">
<link href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('login/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('registerCase') }}" id="signup-form" class="signup-form needs-validation"novalidate>
                    @csrf   
                    @method('POST')
                    <span class="login100-form-title p-b-48">
                            <!-- <i class="zmdi zmdi-font"></i> -->
                            <img src="{{asset('login/images/icons/logo.png')}}"  >
                        </span>
                        <h2 class="form-title">انشئ حساباً</h2>
                        <div class="form-group">
                            <input type="number" class="form-input" name="Nid" id="nat-id" placeholder="الرقم القومى"required>
                        </div>
                        <div class="form-group">
                        <input id="name" placeholder="الاسم ثلاثي"  type="text" class="form-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        
                        </div>
                        <div class="form-group">
                        <input id="email" placeholder="الايميل" type="email" class="form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group">
                        <input id="password" placeholder="الرقم السري" type="password" class="form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="phone" id="phone" placeholder="رقم الهاتف المحمول" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address"  id="address"  placeholder=" العنوان"required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="salary" id="salary" placeholder="الدخل الشهرى"/>
                        </div>
                        <div class="form-group">
                            <label class="custom-control-label" for="customControlAutosizing">تاريخ الميلاد </label>
                            <input type="date" class="form-input" name="birth_date" id="birth_date" placeholder="تاريخ الميلاد"required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="children_number" id="income" placeholder="عدد الاطفال"/>
                        </div>
                        <div class="col-left my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input label-agree-term " id="married" name="marital_status">
                              <label class="custom-control-label" for="married">متزوج/ة </label>
                        </div>
                        <div class="col-left my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input label-agree-term " name="monthly_treatment" id="monthly-incom">
                              <label class="custom-control-label" for="monthly-incom">احصل على علاج شهرى</label>
                            </div>
                        </div>
                        <div class="col-left my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input label-agree-term " id="house-owner" name="rent">
                              <label class="custom-control-label" for="house-owner">امتلك سكن ملك</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="notes" id="notes" placeholder="ملاحظات"/>
                        </div>
                        <div class="col-left my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input label-agree-term " id="customControlAutosizing" required>
                              <label class="custom-control-label" for="customControlAutosizing">اوافق على جميع <a href="" class="term-service">شروط الخدمة</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="انشاء الحساب"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        لديك حساب بالفعل؟ <a href="{{route('login')}}" class="loginhere-link">سجل الدخول</a>
                    </p>
                </div>
            </div>
        </section>

        
        <script src="{{ asset('login/js/popper.js') }}" defer></script>
        <script src="{{ asset('login/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('login/js/jquery-3.2.1.min.js') }}" defer></script>
        <script src="{{ asset('login/js/mainreg.js') }}" defer></script>
        
@endsection
