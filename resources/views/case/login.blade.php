@extends('layouts.login')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('checkPcase')}}">
					<span class="login100-form-title p-b-48">
						<!-- <i class="zmdi zmdi-font"></i> -->
						<img src="images/icons/logo.png"  >
					</span>
					<span class="login100-form-title p-b-26">
						تسجيل الدخول
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="البريد الالكترونى"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">		
						<span class="focus-input100" data-placeholder="كلمة السر"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
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
    @endsection