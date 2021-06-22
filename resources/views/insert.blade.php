<!-- View แสดงหน้าเพิ่มข้อมูลผู้เข้าร่วม -->
@extends('layouts.layout') <!-- เรียกใช้ Template -->
@section('title', 'ลงทะเบียน') <!-- กำหนดชื่อ title -->

@section('header', 'ลงทะเบียน') <!-- กำหนดหัวข้อ -->

@section('text') <!-- แทรกเนื้อหา -->

<!-- แจ้งเตือนการกรอกข้อมูลผิด -->

            @if($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

<!-- form เมื่อกดปุ่ม Register เพื่อเพิ่มข้อมูล จะเช็ค route 'blog.store' โดยจะแนบ reqest ไปด้วย -->
<form method="POST" action="{{ route('blog.store') }}" class="needs-validation"" novalidate>
<!-- เพิ่มความ secure โดยการเพิ่ม @csrf ใน form POST  -->
@csrf
  <!-- row 1 -->
  <div class="form-row">
    <!-- input First Name -->
    <div class="form-group col-md-6">
      <label for="inputFname">ชื่อ</label>
      <input type="text" class="form-control" name="fname" id="fname" placeholder="กรอกชื่อ" required>
    </div>
    <!-- input Last Name -->
    <div class="form-group col-md-6">
      <label for="inputLname">นามสกุล</label>
      <input type="text" class="form-control" name="lname" id="lname" placeholder="กรอกนามสกุล" required>
    </div>
  </div>
  <!-- row 2 -->
  <div class="form-row">
    <!-- input Old -->
    <div class="form-group col-md-6"></div> 
    <div class="form-group col-md-6">
        <label for="inputOld">อายุ</label>
        <input type="text" class="form-control" name="old" id="old" placeholder="กรอกอายุ"  required >
    </div>
  </div>
  <!-- row 3 -->
  <div class="col-md-9"></div>
  <div class="col-md-3">
    <!-- button Register -->
    <button type="submit" class="btn btn-primary  btn-block">Register</button>
  </div>
</form>
<!-- end form -->
@endsection 
<!-- จบการแทรกเนื้อหา @section('text') -->