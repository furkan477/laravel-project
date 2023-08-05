<?php


use Closure;
use Illuminate\Support\Facades\Auth;

class LogoutMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Kullanıcı giriş yapmışsa, 'home' sayfasına yönlendir
            return redirect('/home'); // 'home' sayfa adınıza uygun olan bir route veya URL
        }

        return $next($request);
    }
}