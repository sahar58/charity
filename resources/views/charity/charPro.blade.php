@extends('layouts.charityDash')

@section('content')
@foreach($charity as $charityx)
<head>
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>التقاء</title>
    <!--wow plugin file-->
    <link href="{{ asset('charityPro/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('charityPro/css/boot.css') }}" rel="stylesheet">
	<link href="{{ asset('charityPro/css/style.css') }}" rel="stylesheet">
  
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	         <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<div class="container-fluid">
		<div class="row">
		<div id="nav-search" class="col-8 " style="margin-top: 80px; ">
				  <form class="form-inline " action="/action_page.php" >
				    <!-- Actual search box -->
					  <div class="form-group has-search">
						  <button type="button" class="btn btn-primary">بحث</button>&nbsp
					   <input id="nav-input" style="text-align:right; " class="form-control mr-sm-2" type="text" placeholder="بحث بالرقم القومى">
					  
					  </div>
					
					
				  </form>
				</div>
			 
		</div>
		<br>
	
		<h1 id="jam-name" style=" text-align: right;">{{$charityx->name}}</h1>
		<div class="row" style="width: 100%;">
			<div class="col-2"></div>
			 <table class="table  col-10 " style="background-color: white">
			 
			    <tbody>
			      <tr>
			        <td style="text-align:right;direction: rtl;width: 100%; ">
			        	 <textarea class="col-10 form-control" rows="5" id="" style="width: 100%">{{$charityx->about}}</textarea><br>
			        	 <button type="button" class="  btn btn-primary" style="float: left;">تعديل</button>&nbsp
			        </td>

			      
			      </tr>
			   
			     
			    </tbody>
			  </table>
			
		</div>
		<div id="support"class="row" style="width: 100%;">
			<div class="col-2"></div>
			 <table class="table col-10 " style="background-color: white">
			    <thead>
			      <tr>
			        <th>الدعم</th>
			        <th><button type="button" class="  btn btn-primary">إضافه</button>&nbsp</th>
			      
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
				  @foreach($supports as $support)
			        <td>{{$support->support}}</td>

			        <td>
			        	<button type="button" class="  btn btn-danger mr-3">حذف</button>

			        </td>
			        @endforeach
			      </tr>
			      
			    </tbody>
			  </table>
			
		</div>
		<div id="activity-table"class="row" style="width: 100%;">
			<div class="col-2"></div>
			 <table class="table col-10 " style="background-color: white">
			    <thead>
			      <tr>
			        <th colspan="2">الأنشطة</th>
			        <th colspan="2"><button type="button" class="  btn btn-primary">إضافه</button>&nbsp</th>
			      
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			     

			          <td>
			      	<div class="col-lg-3 col-sm-5">
						<div class="card" style="width:150px">
						  <img class="card-img-top" src="{{ asset('charityPro/img/1.jpg') }}" alt="Card image">
						  <div class="card-body">
							
							<a href="#" class="btn btn-danger" style="padding:7px 30px;">حذف</a>
						  </div>
						</div>
					</div>

			        </td>
			           <td>
			      	<div class="col-lg-3 col-sm-5">
						<div class="card" style="width:150px">
						  <img class="card-img-top" src="{{ asset('charityPro/img/1.jpg') }}" alt="Card image">
						  <div class="card-body">
							
							<a href="#" class="btn btn-danger" style="padding:7px 30px;">حذف</a>
						  </div>
						</div>
					</div>

			        </td>
			           <td>
			      	<div class="col-lg-3 col-sm-5">
						<div class="card" style="width:150px">
						  <img class="card-img-top" src="{{ asset('charityPro/img/1.jpg') }}" alt="Card image">
						  <div class="card-body">
							
							<a href="#" class="btn btn-danger" style="padding:7px 30px;">حذف</a>
						  </div>
						</div>
					</div>

			        </td>
			           <td>
			      	<div class="col-lg-3 col-sm-5">
						<div class="card" style="width:150px">
						  <img class="card-img-top" src="{{ asset('charityPro/img/1.jpg') }}" alt="Card image">
						  <div class="card-body">
							
							<a href="#" class="btn btn-danger" style="padding:7px 30px;">حذف</a>
						  </div>
						</div>
					</div>

			        </td>
			       
			      </tr>
			      
			    </tbody>
			  </table>
			
		</div>
		<div id="support"class="row" style="width: 100%;">
			<div class="col-2"></div>
			 <table class="table col-10 " style="background-color: white">
			    <thead>
			      <tr style="text-align: center;">
			        <th colspan="2">التواصل</th>
			      
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>{{$charityx->phone}}</td>

			        <td>
			        	<button type="button" class="  btn btn-danger mr-3">حذف</button>

			        	<button type="button" class="  btn btn-success">تعديل</button>

			        </td>
			       
			      </tr>
			      <tr>
			        <td>{{$charityx->email}}</td>
			         <td>
			         	<button type="button" class="  btn btn-danger mr-3">حذف</button>
			         	<button type="button" class="  btn btn-success">تعديل</button></td>
			        
			      </tr>
			      <tr>
			        <td>{{$charityx->address}}</td>
			         <td>
			         	<button type="button" class="  btn btn-danger mr-3">حذف</button>
			         	<button type="button" class="  btn btn-success">تعديل</button></td>
			
			      </tr>
			    </tbody>
			  </table>
			
		</div>
	</div>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="{{ asset('charityPro/js/html5shiv.min.js') }}" defer ></script>
	<script src="{{ asset('charityPro/js/jquery-3.5.1.min.js') }}" defer ></script>
	<script src="{{ asset('charityPro/js/bootstrap.min.js') }}" defer ></script>
	@endforeach
@endsection




