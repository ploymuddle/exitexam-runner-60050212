<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route กำหนด url เมื่อ Client ส่ง Request จะตรวจสอบว่า url กับ Controller@function
//name เป็นการตั้งชื่อ Route

//เมื่อผู้ใช้เข้าใช้งานมาในหน้าแรก
Route::get('/', 'App\Http\Controllers\MyController@index')->name('index');
//เมื่อผู้ใช้งานคลิก เมนู ผู้เข้าร่วม เพื่อเพิ่มระยะทางการวิ่ง 
Route::get('/edit', 'App\Http\Controllers\MyController@editdata')->name('edit');
// ฟังชั่นอัพเดตข้อมูลระยะทางการวิ่ง
Route::post('/update', 'App\Http\Controllers\MyController@updatedata')->name('update');
// เมื่อผู้จัดงานต้องการดูรายชื่อผู้เข้าร่วม 10 คนที่วิ่งได้ระยะทางมากสุด
Route::get('/show', 'App\Http\Controllers\MyController@showdata')->name('show'); 
//resource จะเตรียมโค๊ดแบบ CRUD มาให้ ใช้น้อยมากเพราะการทำงานต่างกัน กำหนดเองง่ายกว่า
Route::resource('/blog', 'App\Http\Controllers\MyController'); 
