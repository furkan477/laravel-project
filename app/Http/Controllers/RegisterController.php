<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Register_()
    {
        return view('login/register');
    }

    public function Register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);

        return redirect('/login');
    }
}
