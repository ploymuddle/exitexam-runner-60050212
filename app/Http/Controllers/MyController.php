<?php
//Contoller คือตัวกลางหว่าง Model และ View เป็นผู้เตรียมข้อมูล, จัดการข้อมูลที่ไหลเข้าออก, เรียกใช้ Method ของ Model
namespace App\Http\Controllers;

use App\Models\runner;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;



class MyController extends Controller
{
    public function showdata() //หน้าแรก
    { 
        $data = runner::orderBy('km', 'desc')->take(10)->get();//query data ใน table student
        return view('showdata', compact('data')); //return แสดงหน้า ui ที่ชื่อว่า index
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //หน้าแรก
    {
        return view('index'); //return แสดงหน้า ui ที่ชื่อว่า index เป็น หน้าหลัก
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //หน้า Create
    {
        return view('insert'); //return แสดงหน้า ui ที่ชื่อว่า insert เป็นหน้า ลงทะเบียน
    }

    function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //ฟังก์ชั่นการ Insert ข้อมูล โดยรับ Request เป้น parameter
    {
        //ตรวจสอบ Request ที่รับเข้ามา
        $request->validate([
            "fname" => "required|alpha",
            "lname" => "required|alpha",
            "old" => "required|numeric|gt:0",
        ]);

        $strS = "";
        $characters = array_merge(range('A','Z'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 3; $i++) {
            $rand = mt_rand(0, $max);
            $strS .= $characters[$rand];
        }

        $strN = "";
        $characters = array_merge(range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 3; $i++) {
            $rand = mt_rand(0, $max);
            $strN .= $characters[$rand];
        }

        $id = $strS. "" .$strN;

        //sql ในการสร้างข้อมูล ['column ในตารางที่ต้องการจัดเก็บ' => 'ข้อมูลที่ต้องการจัดเก็บตาม column']
        runner::create([
            'runnerid' => $id,
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'old' => $request['old'],
            'km' => 0,
        ]);

        return view('resultrunner', compact('id'));  //return แสดงหน้า แสดงรหัสของผู้เข้าร่วม
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //หน้าแสดงข้อมูลตาม ID โดยรับ id เป้น parameter
    {
       //ไม่ได้ใช้ 
    }

    public function editdata() //หน้าแสดง ui
    {
        return view('editdata'); //return แสดงหน้า ui ที่ชื่อว่า editdata เมนู ผู้เข้าร่วม
    }
    public function updatedata(Request $request) //ฟังก์ชั่นการ Update ข้อมูล โดยรับ Request เป้น parameter
    {
        //ตรวจสอบ Request ที่รับเข้ามา 
        $request->validate([
            "id" => "required|max:6|min:6",
            "km" => "required|numeric|between:0,10",
        ]);

       $id =  $request['id'];
    //    $find = DB::select('select id from runners where runnerid = ?', [$id]);

       $kmold = runner::where('runnerid','=', $id)->first();
    
       $km = $kmold->km + $request['km'];     
    //    dd($km); 
    
        //  sql ในการแก้ไขข้อมูล ['column ในตารางที่ต้องแก้ไข' => 'ข้อมูลที่ต้องการจัดเก็บตาม column']
        DB::table('runners')
        ->where('runnerid', $id)
        ->update([
            'km' => $km,
            'updated_at' => now()
        ]);
        return view('resultupdate', compact('id','km'));//return แสดงหน้า resultupdate เป็นหน้าบอกว่าผู้เข้าร่วมเพิ่มระยะทางวิ่ง
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //หน้าแก้ไขข้อมูล โดยรับ id เป้น parameter
    {
        //ไม่ได้ใช้
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //ฟังก์ชั่นการ Update ข้อมูล โดยรับ Request, id เป้น parameter
    {
        //ไม่ได้ใช้
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //ฟังก์ชั่นการ Delete ข้อมูล
    {
       //ไม่ได้ใช้
    }
}
