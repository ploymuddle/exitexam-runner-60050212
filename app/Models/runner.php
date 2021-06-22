<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class runner extends Model
{
    use HasFactory;
    protected $fillable = [     // กำหนดชื่อของ column ที่อนุญาติให้เข้าถึง เมื่อเราทำการเพิ่ม/แก้ไขข้อมูล
        'id',
        'runnerid',
        'fname',
        'lname',
        'old',
        'km',
        'updated_at'
    ];
}
