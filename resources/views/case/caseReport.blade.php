@extends('layouts.charityDash')

@section('content')

<head>
    <linkrel="stylesheet" href="{{ asset('case/project1.css') }}">
   
</head>


<div class="containers" style= "text-align: right;">
    
 <p>
    
        <P>الاسم:{{@casez->name}} </P>  <br>

       <p>الرقم القومي: {{@casez->Nid}}</p>
        <br>  

    <p>العنوان: {{@casez->address}} </p> <br>

<P>التليفون: {{@casez->phone}}</P> <br>

<P>الحالة الاجتماعية:{{@casez->marital_status}} </P><br>


    <P>عدد الاطفال: {{@casez->children_number}}</P> <br>


<P>:نوع الدعم</P>
<ul class="a" style="text-align: right;" dir="rtl">

    
  </ul>

<br>
   


    <div style="text-align: center;">
        <a href="">الرجوع</a>
        <a  href="">الصفحة الرئيسية</a>
        </div>
    
</div>