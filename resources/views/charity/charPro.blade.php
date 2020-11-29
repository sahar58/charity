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

<div class="container-fluid">
		<div class="row">
				 <nav id="nav-search" class="col-8 navbar navbar-expand-sm bg-dark navbar-dark">
				  <form class="form-inline " action="/action_page.php">
				    <!-- Actual search box -->
					  <div class="form-group has-search">
						  <button type="button" class="btn btn-primary">بحث</button>&nbsp
					   <input id="nav-input" style="text-align:right; " class="form-control mr-sm-2" type="text" placeholder="بحث بالرقم القومى">
					  
					  </div>
					
					
				  </form>
				</nav>
				<!--<nav class="col-2 navbar navbar-expand-sm bg-dark navbar-dark"></nav>-->
			<nav id="nav-menu" class="col-4 navbar navbar-expand-sm bg-dark navbar-dark">
				

				  <!-- Links -->
				  <ul class="navbar-nav">
				  	<li class="nav-item">
					  <a class="nav-link" href="#" > <h4 >
					  <span><i class="fas fa-undo" style="color: red"></i>
					  </span>	
					  </h4></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#" style="color: #007bff;"> <h5>المنتفعين
					  </h5></a>
					</li>
					
				
				
			
				  </ul>
			</nav> 
			 
		</div>
		<br>
	
		<div class="row" style="width: 100%;">
			<div class="col-2"></div>
			 <table class="table  col-10 " style="background-color: white">
			 
			    <tbody>
			      <tr>
			        <td style="text-align:right;direction: rtl;width: 100%; ">
			        	 <textarea class="col-10 form-control" rows="5" id="" style="width: 100%"></textarea><br>
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
			        <td>تقديم المساعدة المالية للمحتاج.</td>

			        <td>
			        	<button type="button" class="  btn btn-danger mr-3">حذف</button>

			        	<button type="button" class="  btn btn-success">تعديل</button>

			        </td>
			       
			      </tr>
			      <tr>
			        <td>تقديم المستلومات الطبية</td>
			         <td>
			         	<button type="button" class="  btn btn-danger mr-3">حذف</button>
			         	<button type="button" class="  btn btn-success">تعديل</button></td>
			        
			      </tr>
			      <tr>
			        <td>كسوة المحتاج.</td>
			         <td>
			         	<button type="button" class="  btn btn-danger mr-3">حذف</button>
			         	<button type="button" class="  btn btn-success">تعديل</button></td>
			
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
			        <td>23232323232</td>

			        <td>
			        	<button type="button" class="  btn btn-danger mr-3">حذف</button>

			        	<button type="button" class="  btn btn-success">تعديل</button>

			        </td>
			       
			      </tr>
			      <tr>
			        <td>nabta.yahoo.com</td>
			         <td>
			         	<button type="button" class="  btn btn-danger mr-3">حذف</button>
			         	<button type="button" class="  btn btn-success">تعديل</button></td>
			        
			      </tr>
			      <tr>
			        <td>القاهره شارع طارق بن زياد</td>
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
	   <script  src="{{ asset('charityPro/js/bootstrap.min.js') }}" defer ></script>