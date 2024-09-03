<?php


use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::resource('teacher',TeacherController::class);

Route::post('login',[AuthController::class,'login']);
//สร้างประตู หรือ middleware สำหรับตรวจสอบสิทธิการใช้งาน 
Route::group(['middleware' =>[
   'auth:sanctum',
   ]],
   function(){
      Route::resource('teacher',TeacherController::class);
      //กำหนด Router สำหรับ logout
      Route::post('logout',[AuthController::class,'logout']);
   }
);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});