<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //คำสั่งสำหรับลบ Token ที่ใช้ปัจจุบัน
    public function logout(Request $request){
        //  dd($req->email."".$req->password);
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'logout Complete',
                
         ]);
}
        //คำสั่ง login
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
            //ค้นหาผู้ใช้ โดยผ่าน email
            $user = User::where('email',$req->email)->first();
            //สร้าง token สำหรับ user และเก็บตัวแปร token
            $token =$user -> createToken('authToken')->plainTextToken;
            return response()->json([
                "message" => "login สำเร็จ",
                "status_code" => "200",
                "user infomation" => $user,
                "token" => $token,
            ]);
            //dd("login สำเร็จ");
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
