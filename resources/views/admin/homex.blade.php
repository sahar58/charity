
@extends('layouts.adminDash')

@section('content')
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
   
      
      
      
      
      
      
       <span class="float-right mb-3 mr-2"><a href="{{route('createCharity')}}" id="add-row"
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
  @endsection
