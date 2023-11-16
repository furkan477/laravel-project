<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function login_()
    {  return view('blogs.login');  }

    public function login(FormLoginRequest $request)
    {
        if (Auth()->attempt(["email" => $request->email, "password" => $request->password])) {
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
