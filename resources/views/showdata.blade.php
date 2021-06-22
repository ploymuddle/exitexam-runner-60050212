<!-- View แสดงหน้าแสดงข้อมูลผู้เข้าร่วม 10 คนที่มีการวิ่งสูงสุด -->
@extends('layouts.layout') <!-- เรียกใช้ Template -->
@section('title', 'ผู้จัดงาน') <!-- กำหนดชื่อ title -->

@section('header', 'ตารางแสดงผู้เข้าร่วม') <!-- กำหนดหัวข้อ -->

@section('text') <!-- แทรกเนื้อหา -->

<!-- สร้างตัวแปร i เพื่อเป็นค่าแสดงผลลำดับ -->
@php
  $i = 0;
@endphp
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Runner ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">km</th>
      <th scope="col">Update Date</th>
    </tr>
  </thead>
  <tbody>
  <!-- วนลูป เพื่อแสดงค่าในตาราง จาก return ค่า student มา -->
  @foreach( $data as $s)
    @php
      $i++;
    @endphp
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$s->runnerid}}</td>
      <td>{{$s->fname}}</td>
      <td>{{$s->lname}}</td>
      <td>{{$s->km}}</td>
      <td>{{$s->updated_at}}</td>
    </tr>
  @endforeach
  <!-- จบการทำงาน วนลูป เพื่อแสดงค่า student -->
  </tbody>
</table>

@endsection 
<!-- จบการแทรกเนื้อหา @section('text') -->