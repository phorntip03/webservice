<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    //1:m
    public function region(){
                                             //fk         pk
        return $this->hasMany(Region::class,'country_id','id');
    }
}
