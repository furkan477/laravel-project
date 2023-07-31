<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\User; // Kullanıcı modelini dahil edin

class CheckUniqueEmail
{
    public function handle($request, Closure $next)
    {
        $email = $request->input('email');

        // Eğer email veritabanında varsa, hata döndür
        if (User::where('email', $email)->exists()) {
            return response()->json(['message' => 'This email is already registered.'], 422);
        }

        return $next($request);
    }
}