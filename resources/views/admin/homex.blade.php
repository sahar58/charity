<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ابداع تـك</title>
    <!--wow plugin file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/animate.css') }}">
    <!--Bootstrap css file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/bootstrap.min.css') }}">
    <!--FontAwasem file-->

    <link rel="stylesheet" href=" {{ asset('dashbord/css/font-awesome.min.css') }}">
    <!--google-fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <!--Owl Carousel file-->
    <link rel="stylesheet" href=" {{ asset('dashbord/css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/slick-theme.css') }}">
    <!--Main css file-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashbord/css/tabstyle.css') }}">
    
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
     <link rel="stylesheet" href=" {{ asset('dashbord/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <link href="https://maxcdn.bootstrapcdn..." rel="stylesheet">
<link href="https://cdnjs.cloudflare.co..." rel="stylesheet">
<script src="http://ajax.googleapis.com/..."></script>
<script src="https://maxcdn.bootstrapcdn..."></script>
<script src="https://cdnjs.cloudflare.co..."></script>
  
    
    
</head>

<body>


  <div class="container">
    <h1>البيانات المسجله</h1>
  <hr>
  <div class="row">
    <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">الجمعيات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">الحالات المسجله</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">بيانات شخصيه</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">المسئولين </a>
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-10">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <!-- charity #######################################################
############################################################################################################
########################################################################################################### -->
  <h2>الجمعيات</h2>
   
      
      
      
      
      
      
       <span class="float-right mb-3 mr-2"><a href="#!" id="add-row"
                    class="text-success btn-rounded btn-lg mr-3">
                    <i class="fa fa-user-plus"></i></a></span>
                <table id="ctable" class="table table-bordered table-responsive-md table-striped text-center">
                  <thead>
                    <tr>
                      <th class="text-center">رقم الجمعيه</th>
                      <th class="text-center">اسم الجمعيه</th>
                      <th class="text-center">البريد الالكترونى</th>
                      <th class="text-center">العنوان</th>
                      <th class="text-center">رقم الهاتف</th>
                      <th class="text-center">تاريخ الانضمام</th>
                      <th class="text-center">نشاط الجمعيه</th>
                      <th class="text-center">حذف</th>
                    </tr>
                  </thead>
                  <tbody>


                  @foreach($data['charity'] as $item)  
                    <tr>
                      <td class="pt-3-half" contenteditable="true">{{$item->charity_number}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->name}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->email}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->address}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->phone}}</td>
                      <td class="pt-3-half">
                        <span class="form-group">
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" value="{{$item->created_at}}"/>
                        </span>
                      </td>
                      <td class="pt-3-half" contenteditable="true">
                        طعام وصحه وملبس ومسكن
                      </td>
                      <td>
                        <span class="table-remove">
                          <button class="btn btn-danger btn-rounded btn-md my-0"><i class="fa fa-trash"></i></button>
                        </span>
                      </td>
                    
                    </tr>
                   @endforeach
                  </tbody>
                </table>
      
      
      
      
      
      
      
      
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <h2>الحالات المسجله</h2>
  <!-- <table id="dt-basic-checkbox" class="table" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th></th>
        <th class="th-sm">الاسم
        </th>
        <th class="th-sm">الرقم القومى
        </th>
        <th class="th-sm">العمر
        </th>
        <th class="th-sm">نوع الدعم
        </th>
        <th class="th-sm">العنوان
        </th>
        <th class="th-sm">الشخص المسئول
        </th>
        <th class="th-sm">رقم الهاتف
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>
        </th>
        <th>Position
        </th>
        <th>Office
        </th>
        <th>Age
        </th>
        <th>Start date
        </th>
        <th>Salary
        </th>
      </tr>
    </tfoot>
  </table> -->
  <!--Table-->
      <span class="float-right mb-3 mr-2"><a href="#!" id="addrow"
                    class="text-success btn-rounded btn-lg mr-3">
                    <i class="fa fa-user-plus"></i></a></span>
<table class="table table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
                      <th class="text-center">الاسم</th>
                      <th class="text-center">الرقم القومى</th>
                      <th class="text-center">السن</th>
                      <th class="text-center">العنوان</th>
                      <th class="text-center">رقم الهاتف</th>
                      <th class="text-center">ترتيب</th>
                      <th class="text-center">حذف</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
  @foreach($data['person'] as $item)  
    <tr>
                      <td class="pt-3-half" contenteditable="true">{{$item->name}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->Nid}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->birth_date}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->address}}</td>
                      <td class="pt-3-half" contenteditable="true">{{$item->phone}}</td>
                      <td class="pt-3-half">
                        <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-sort"></i></a></span>
                      </td>
                      <td>
                        <span class="table-remove">
                          <button class="btn btn-danger btn-rounded btn-md my-0"><i class="fa fa-trash"></i></button>
                        </span>
                      </td>
                    </tr>
    @endforeach
                   
  </tbody>
  <!--Table body-->
  <!-- Add rows button-->
</table>

<!--Table-->
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <h2>بيانات شخصيه</h2>
    
  
  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  



        <!--Jquery file-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js" defer ></script>
        <!--Owl js file-->
        <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer ></script>
        <!---databse -->
        <script   defer src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script  defer  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!--Main css file-->
        <script defer type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                <!-- Include Date Range Picker -->
         <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      
        <script src="{{ asset('dashbord/js/file.js') }}" defer ></script>
       </body>
 </html>