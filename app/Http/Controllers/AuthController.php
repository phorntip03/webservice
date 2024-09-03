<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $req){
        dd($req->email."".$req->password);
        Validator::make($req -> all(),[

        ]);
    }
}
