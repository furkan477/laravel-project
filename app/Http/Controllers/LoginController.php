<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller    
{
    public function Login_()
    { 
        return view('login/login');
    }

    public function Login(Request $request)
    {
        $validate = $request->validate([
            "email" => ["required","email"],
            "password" => ["required"],
        ]);
        
        if(Auth::attempt($validate)){
            $request->session()->regenerate();

            return redirect('/biletmax');
        }

        return redirect()->back();     
    }
}
