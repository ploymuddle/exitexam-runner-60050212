<!-- View แสดงหน้ารหัสผู้เข้าร่วม เมื่อลงทะเบียนเสร็จแล้ว -->
@extends('layouts.layout') <!-- เรียกใช้ Template -->
@section('title', 'ผู้เข้าร่วม') <!-- กำหนดชื่อ title -->

@section('header', 'ยินดีต้อนรับ ผู้เข้าร่วม') <!-- กำหนดหัวข้อ -->

@section('text') <!-- แทรกเนื้อหา -->


  <div class="row">
    <h3>รหัสของคุณคือ  {{$id}}</h3>
  </div>
  <div class="row">
  <div class="col-md-3">
    <!-- button Cancel -->
    <a href="{{ url('/') }}" type="button" class="btn btn-default btn-block">Back</a>
  </div>
  </div>
 

@endsection 
<!-- จบการแทรกเนื้อหา @section('text') -->