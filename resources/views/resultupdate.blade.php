<!-- View แสดงหน้าอัปเดตระยะทางเสร็จแล้ว -->
@extends('layouts.layout') <!-- เรียกใช้ Template -->
@section('title', 'เพิ่มระยะทางในการวิ่ง') <!-- กำหนดชื่อ title -->

@section('header', 'เพิ่มระยะทางในการวิ่ง') <!-- กำหนดหัวข้อ -->

@section('text') <!-- แทรกเนื้อหา -->


  <div class="row">
    <h3>รหัสของคุณคือ  {{$id}}</h3>
    <h3>บันทึกข้อมูลเพิ่มอีก  {{$km}} km</h3>
  </div>
  <div class="row">
  <div class="col-md-3">
    <!-- button Cancel -->
    <a href="{{ url('/edit') }}" type="button" class="btn btn-default btn-block">Back</a>
  </div>
  </div>
 

@endsection 
<!-- จบการแทรกเนื้อหา @section('text') -->