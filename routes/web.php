<?php
use \App\Models\Country;
use \App\Models\Teacher ;
use \App\Models\Province;
use \App\Models\Region;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //คำสั่งในการ debug ข้อมูล
    //dd(55555);
    //การ query ข้อมูล
    //ดึงข้อมูลตารางProvinceทั้งหมดและเก็บค่าในตัวแปล model
    // $model = \App\Models\Province::all();
    // dd($model[0]->student[0]->name);
     //ดึงข้อมูลตารางCountryทั้งหมดและเก็บค่าในตัวแปล model
    // $c = Country::all();
    //  dd($c[0]->region[0]->name);
    // $model = Region::all();
    // dd($model[0]->country);
    $model = country::all();
    //dd($model[0]->region[0]->province[0]->teacher[0]);

    $t = Teacher::find(1);
    dd($t->province->region->country);
    

    return view('welcome');
});
