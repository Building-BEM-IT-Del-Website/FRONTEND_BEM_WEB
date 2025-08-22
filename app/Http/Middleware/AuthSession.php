<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthSession
{

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah token ada di session
        if (!Session::has('token')) {
            Session::flush();
            return redirect()->route('auth.login')->withErrors('Silakan login terlebih dahulu.');
        }

        $token = Session::get('token');
        $baseUrl = config('api.base_url');

        try {
            // 2. Panggil endpoint /me di BE untuk validasi token
            $response = Http::withToken($token)->get("{$baseUrl}/auth/me");

            // 3. Kalau token expired / tidak valid → logout FE
            if ($response->status() === 401) {
                Session::flush();
                return redirect()->route('auth.login')->withErrors('Session Anda telah berakhir. Silakan login kembali.');
            }

        } catch (\Exception $e) {
            Session::flush();
            return redirect()->route('auth.login')->withErrors('Terjadi kesalahan. Silakan login kembali.');
        }

        // Token valid → lanjut request
        return $next($request);
    }
}

