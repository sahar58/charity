@extends('layouts.charityDash')

@section('content')
<head>
<title>التقاء</title>
<link href="{{ asset('charityPro/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('charityPro/css/boot.css') }}" rel="stylesheet">
	<link href="{{ asset('charityPro/css/style.css') }}" rel="stylesheet">
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	     <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 300px;
	
  }
  </style>
</head>
@foreach($charity as $charityx)
    <div class="container-fluid" style=" margin-top: 100px;">
           <!-- name of jam3ea  -->
           <br>
      <h1 id="jam-name" style=" text-align: right;">{{$charityx->name}}</h1>
      <br><br>
      <!---------------------------------->
      <!-------------------- notes about jam3ia---------------------->
      <h3 style=" text-align: right;">:عن الجمعية </h3> 
	  <div class="jumbotron jumbotron-fluid">
	  
		  <div class="container">
		       
		    <p style=" text-align: right;">{{$charityx->about}}.</p>
		  </div>
	  </div>
      <!-------------------------------------------------------------->
      <!------------------------------support---------------------------------->
      <div class="jumbotron jumbotron-fluid">
		  <div class="container">
		     <h3 style=" text-align: right;">الدعم</h3>  
		    <p>
		    	 <ul class="list"  style=" text-align: right;"   dir="rtl">
					 @foreach($supports as $support)
						<li >{{$support->support}}</li>
					
					 @endforeach
				</ul> 
		    </p>
		  </div>
	  </div>
      <!------------------------------------------------------------------>
      <!----------------------------activities------------------------------------>
      <div class="row" id="activity">
			
				<div class="row col-12">
					<div class="col-12">
						<div id="demo" class="carousel slide" data-ride="carousel" style="width:100%">
						  <ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						  </ul>
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img src="{{ asset('charityPro/img/1.jpg') }} " alt="Los Angeles" width="1100" height="500">
							   
							</div>
							<div class="carousel-item">
							  <img src="{{ asset('charityPro/img/2.jpg') }}" alt="Chicago" width="1100" height="500">
							   
							</div>
							<div class="carousel-item">
							  <img src="{{ asset('charityPro/img/3.jpg') }}" alt="New York" width="1100" height="500">
							   
							</div>
				  </div>
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>
				</div>
					</div>
				</div>
			</div>
			<br>
      <!----------------------------------------------------------------->
         <!------------------------------contact us---------------------------------->
      <div class="jumbotron jumbotron-fluid">
		  <div class="container">
		     <h3 style="text-align: center;">تواصل معنا</h3>  
		    <p>
		    	  <ul class="fa-ul">
<li>
 <span><i class="fa fa-phone" style="color:#4f58c9;"></i></span> &nbsp {{$charityx->phone}}
</li>
<br>
<li>
 <span><i class="far fa-envelope"style="color: #dc4c40;"></i></span> &nbsp {{$charityx->email}}
</li>
<br>
<li>
 <span><i class="fas fa-map-marker-alt" style="color: #008a00"></i></span>&nbsp {{$charityx->address}}
</li>
</ul>  
		    </p>
		  </div>
	  </div>
      <!------------------------------------------------------------------>
        
      </div>
	  <script src="{{ asset('charityPro/js/html5shiv.min.js') }}" defer ></script>
	<script src="{{ asset('charityPro/js/jquery-3.5.1.min.js') }}" defer ></script>
	<script src="{{ asset('charityPro/js/bootstrap.min.js') }}" defer ></script>
     @endforeach
	@endsection
