<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    //1:m
    // public function country(){
    //     //belongsTo ส่วนกลับ
    //     return $this->belongsTo(Country::class,'country_id','id');
    // }
    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    
    public function province(){
        return $this->hasMany(Province::class, 'region_id', 'id');
    }
}
