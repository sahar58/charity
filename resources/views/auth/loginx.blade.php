@extends('layouts.charityDash')

@section('content')
<head>
    
   
	    
<link rel="icon" type="image/png" href="{{ asset('login/img/favicon.ico') }}"/>
<link href="{{ asset('login/css/util.css') }}" rel="stylesheet">
<link href="{{ asset('login/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('login/fonts/iconic/css/icon.css') }}" rel="stylesheet">
<link href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('login/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
                    <form method="POST" action="{{route('checkPcase')}}" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title p-b-48">
						<!-- <i class="zmdi zmdi-font"></i> -->
						<img src="{{ asset('login/images/icons/logo.png') }}"  >
					</span>
					<span class="login100-form-title p-b-26 " >
						تسجيل الدخول
                    </span>
                    
                    
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						
                            <input id="email" type="email" class=" input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="focus-input100" data-placeholder="البريد الالكترونى"></span>
					
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                        

                        
					<div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
							  <input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" required >
                                <span class="focus-input100" data-placeholder="كلمة السر"></span>
					
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                       


                            <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button type="submit"  class="login100-form-btn"style="background-color: #6328b9;">
                                    Login
                                </button>

                              
                            </div>
                        </div>
                        

                        <div class="text-center p-t-80">
						<span class="txt1">
							ليس لديك حساب؟
						</span>

						<a class="txt2" href="#">
							انشاء حساب
						</a>
					</div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
       
        <script src="{{ asset('login/js/popper.js') }}" defer></script>
        <script src="{{ asset('login/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('login/js/jquery-3.2.1.min.js') }}" defer></script>
        <script src="{{ asset('login/js/main.js') }}" defer></script>
        
@endsection
