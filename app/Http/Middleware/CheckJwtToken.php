<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckJwtToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = session('token'); // Ambil token dari session

        if (!$token) {
            return redirect()->route('login')->withErrors('Anda perlu login terlebih dahulu.');
        }

        try {
            // Pengecekan token ke API
            $baseUrl = config('api.base_url');
            $response = Http::withToken($token)->get("{$baseUrl}/auth/check"); // Endpoint BE untuk validasi token

            if ($response->failed()) {
                session()->forget('token'); // Hapus token dari session
                return redirect()->route('login')->withErrors('Token tidak valid atau sudah expired.');
            }

            return $next($request);
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
