<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function welcome(Request $request){
    	return view('welcome', with([
            'namaDepan' => $request->namaDepan,
            'namaBelakang' => $request->namaBelakang
        ]));
    }
}
