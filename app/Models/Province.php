<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    //1 to many 1:m
    // public function student(){
    //     return $this->hasMany(student::class,'province_id','id');
    //}
    public function teacher(){
        return $this->hasMany(Teacher::class, 'province_id', 'id');
    }
    
    public function region(){
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    
   
    
}
