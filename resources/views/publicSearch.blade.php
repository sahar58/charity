@extends('layouts.charityDash')

@section('content')

<head>
	<link rel="stylesheet" href="{{ asset('charityPro/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('charityPro/css/boot.css') }}">
    <link rel="stylesheet" href="{{ asset('charityPro/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script> 
</head>


<div class="container-fluid" style="background-color: white; margin-top: 80px;">

   		<div class="row">
				
				<!--<nav class="col-2 navbar navbar-expand-sm bg-dark navbar-dark"></nav>-->
			<div id="nav-menu" class="col-7 ">
				

				  <!-- Links -->
				
			</div> 
			 <div id="nav-search" class="col-4 ">
			
				    <!-- Actual search box -->
					 

						 
					   <input id="nav-input" style="text-align:right; " class="form-control mr-sm-2" type="text" placeholder="بحث"      required>
				
					
					
					
				
				</div>
					<div id="nav-menu" class="col-1 ">
				

				  <!-- Links -->
				
			</div> 
			 
		</div>
   	
   </div>

<br><br>
   <div class="container" style="height: 520px;overflow-y: scroll;overflow-x:hidden; ">
   <table class="table table-dark table-hover table-striped" style="direction: rtl">
    <thead>
      <tr>
      	
        <th>الأسم</th>
        <th>العنوان</th>
        <th>تاريخ الميلاد</th>
        <th>علاج شهرى</th>
        <th>الدعم</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="tablebody">
    @foreach($data['case'] as $item) 
      <tr>
      	
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->birth_date}}</td>
        <td>{{$item->monthly_treatment}}</td>
        <td>
        @foreach($support[$item->name] as  $itemx) 
      
        
         {{$itemx->support}}<br>
       
        @endforeach
        </td>
        <td>
<a href="{{ route('home.pubSearchPro',$item->Nid) }}" class="btn btn-success btn-sm">المزيد</a></td>
    </td>
      </tr>
     @endforeach

    </tbody>
  </table>
</div>

    <script src="{{ asset('charityPro/js/html5shiv.min.js') }}" defer ></script>
    <script src="{{ asset('charityPro/js/jquery-3.5.1.min.js') }}" defer ></script>
    <script src="{{ asset('charityPro/js/bootstrap.min.js') }}" defer ></script>
    <script src="{{ asset('charityPro/js/js.js') }}" defer ></script>
     @endsection