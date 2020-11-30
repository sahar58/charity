@extends('layouts.charityDash')

@section('content')
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
@endsection




