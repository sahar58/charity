@extends('layouts.charityDash')

@section('content')

    <div class="container-fluid">
           <!-- name of jam3ea  -->
           <br>
      <h1 id="jam-name">نبتة خير</h1>
      <br><br>
      <!---------------------------------->
      <!-------------------- notes about jam3ia---------------------->
      <div class="jumbotron jumbotron-fluid">
		  <div class="container">
		       
		    <p>رؤية الجمعية هي: تقديم أنموذج حضاري ريادي في العمل الخيري. أما رسالتها فهي : الرعاية الشاملة لأيتام في حكمهم أو من يرتبط بهم كأمهاتهم 
		    ,اطلقت جمعية تكافل مشاريع لكفالة الأيتام تطبيقا لسنة نبينا الكريم حيث قال: (أنا وكافل اليتيم في الجنة هكذا وأشار بالسبابة والوسطى، و
		هى تهدف لصنع الخير دائما.</p>
		  </div>
	  </div>
      <!-------------------------------------------------------------->
      <!------------------------------support---------------------------------->
      <div class="jumbotron jumbotron-fluid">
		  <div class="container">
		     <h3>الدعم</h3>  
		    <p>
		    	 <ul class="list">
  <li >تقديم المساعدة المالية للمحتاج.</li>
  <li >تقديم المستلومات الطبية</li>
  <li >كسوة المحتاج.</li>
 
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
 <span><i class="fa fa-phone" style="color:#4f58c9;"></i></span> &nbsp12312121212 
</li>
<br>
<li>
 <span><i class="far fa-envelope"style="color: #dc4c40;"></i></span> &nbsp nabta@yahoo.com
</li>
<br>
<li>
 <span><i class="fas fa-map-marker-alt" style="color: #008a00"></i></span>&nbsp cairo-omar ebn elas street
</li>
</ul>  
		    </p>
		  </div>
	  </div>
      <!------------------------------------------------------------------>
        
      </div>
     
	@endsection
