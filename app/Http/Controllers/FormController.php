<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class FormController extends Controller
{
    public function register_()
    {  return view('blogs.register');  } 

    public function login_()
    {  return view('blogs.login');  }

    public function register(FormRegisterRequest $request)
    {
        $adsoyad = $request->adsoyad;
        $email = $request->email;
        $password = Hash::make($request->password);

        User::create([

            "name" => $adsoyad,
            "email" => $email,
            "password" => $password

        ]);

        return redirect('login');
    }

    public function login(Request $request)
    {
        $condition = $request->validate([
            "email" => ['required','email'],
            "password" => ["required"]
        ]);

        if(Auth::attempt($condition))
        {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }

        return redirect()->back()->withInput($request->only('email','password'))->withErrors([
            'email' => 'Email adresiniz hatalı olabilir',
            'password' => 'Şifreniz hatalı olabilir',

        ]);

    }  

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
    
}
