<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register_()
    {  return view('blogs.register');  } 

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
}
