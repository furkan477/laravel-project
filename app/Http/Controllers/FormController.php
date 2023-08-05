<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class FormController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view('login');
    }

    public function register_success(Request $request)
    {
        $request->validate([
            "adsoyad"=>"required|min:3|max:12",
            "email"=>"required|email|min:10|max:32",
            "password"=>"required|min:6|confirmed"
        ]);
        
        $adsoyad = $request->adsoyad;
        $email = $request->email;
        $password = $request->password;

        User::create([

            "name" => $adsoyad,
            "email" => $email,
            "password" => $password

        ]);

        return redirect('/login');

    }

    public function login_success(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }
        return 'Şifreniz veya Email adresiniz Hatalı'. redirect()->back();
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
 
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        exit;
 
        
    }
}
