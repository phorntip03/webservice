<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function province(){
        //belongsTo ส่วนกลับ
        return $this->belongsTo(Province::class,'province_id','id');
    }
    
}
