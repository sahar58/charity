@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href='{{asset("case/project1.css")}}'>
</head>

<div class="containers" style="text-align:right;margin-top: 120px; " >

        <P>الاسم: {{$casez->name}} </P>  <br>

       <p>الرقم القومي: {{$casez->Nid}}</p>
        <br>  

    <p>العنوان: {{$casez->address}} </p> <br>

<P>التليفون: {{$casez->phone}}</P> <br>

<P>الحالة الاجتماعية:{{$casez->marital_status}} </P><br>


    <P>عدد الاطفال: {{$casez->children_number}}</P> <br>


<P>:نوع الدعم
    <ul style="direction:rtl">
   
    @foreach($supports as $support )
      <li>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"> {{$support->support}} </li>
  
        <li class="list-group-item"><a href="{{ route('charity.updatesupport',['supportId'=>$support->id,'userid'=>$casez->Nid]) }}" class="btn btn-success btn-sm">مساعدة</a></li>
     
    </ul>
    </li>
    @endforeach
   
    <ul>
    <P>:الجمعيات الداعمة
    <ul style="direction:rtl">
   
   @foreach($charities as $charity)
     <li>
     
     {{$charity->name}} 
 
   
   </li>
   @endforeach
  
   <ul>
</P>
<ul class="a" style="text-align: right;" dir="rtl">

    
  </ul>

<br>
   


    <div style="text-align: center;">
        <a href="">الرجوع</a>
        <a  href="">الصفحة الرئيسية</a>
        </div>
    
</div>