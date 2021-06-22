<!-- View แสดงหน้าเพิ่มข้อมูลระยะทาง -->
@extends('layouts.layout') <!-- เรียกใช้ Template -->
@section('title', 'Input Teams') <!-- กำหนดชื่อ title -->

@section('header', 'Input Teams') <!-- กำหนดหัวข้อ -->

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
<form method="POST" action="{{ route('update') }}" class="needs-validation"" novalidate>
<!-- เพิ่มความ secure โดยการเพิ่ม @csrf ใน form POST  -->
@csrf

  <!-- row 2 -->
  <div class="form-row">
    <!-- input Student ID -->
    <div class="form-group col-md-6">
        <label for="inputID">รหัสของคุณ</label>
        <input type="text" class="form-control" name="id" id="id" placeholder="กรอกรหัสของคุณ" required >
    </div>
    <div class="form-group col-md-6">
        <label for="inputKm">ระยะทาง</label>
        <input type="text" class="form-control" name="km" id="km" placeholder="กรอกระยะทาง" required >
    </div> 
  </div>
  <!-- row 3 -->
  <div class="col-md-9"></div>
  <div class="col-md-3">
    <!-- button Register -->
    <button type="submit" class="btn btn-primary  btn-block">Save</button>
  </div>
</form>
<!-- end form -->
@endsection 
<!-- จบการแทรกเนื้อหา @section('text') -->