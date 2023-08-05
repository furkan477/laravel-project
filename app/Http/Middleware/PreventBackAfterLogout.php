<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventBackAfterLogout
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Eğer kullanıcı logout olduysa, tarayıcıyı önbellekten temizle
        if (auth()->guest() && !$request->is('login')) {
            $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $response->header('Pragma', 'no-cache');
            $response->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');
        }

        return $response;
    }
}
