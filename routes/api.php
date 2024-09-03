<?php


use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;






Route::resource('teacher',TeacherController::class);
Route::post('login',[AuthController::class.'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});