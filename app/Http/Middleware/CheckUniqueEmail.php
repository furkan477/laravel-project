<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class CheckUniqueEmail
{
    public function handle($request, Closure $next)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|email|unique:users,email'
        ]);

        if ($validator->fails()) {
            return redirect()->back();
        }

        return $next($request);
    }
}   