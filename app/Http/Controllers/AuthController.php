<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $req){
      //  dd($req->email."".$req->password);
        $check = Validator::make($req -> all(),[
            'email'=> 'required|email',
            'password' => 'required|min:6'

        ]);
        //ถ้าตรวจสอบไม่ผ่านจะให้แสดงข้อความกลับ
        if($check->fails()){
            return response()->json([
            'message' => "Error",
            'status_code' => "400",
            ]);
        }else{
            //แปลงข้อมูลที่ได้จาก required มาเก็บในตัวแปร data 
            $data = request(['email','password']);
           //การตรวจสอบข้อมูลในตัวแปล  $data ตรงกับฐานข้อมูลหรือมั้ย
           if(Auth::attempt($data)){
            dd("login สำเร็จ");
           }else{
            dd("ไม่พบผู้ใช้รหัสผ่านไม่ถูกต้อง");
           }

            return response()->json([
                'message' => "Success",
                'status_code' => "200",
            ]);
        }
    }
}
