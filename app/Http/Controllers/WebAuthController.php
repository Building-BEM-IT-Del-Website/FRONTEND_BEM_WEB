<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class WebAuthController extends Controller
{
    /**
     * Tampilkan halaman login
     */
    public function showLogin()
    {
        // Kalau sudah login, redirect langsung ke dashboard
        if (Session::has('token')) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    /**
     * Proses login ke backend API
     */
    public function login(Request $request)
    {
        $baseUrl = config('api.base_url');

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        try {
            // Panggil API backend (Laravel BE pakai JWT)
            $response = Http::post($baseUrl . '/auth/login', [
                'username' => $request->username,
                'password' => $request->password,
            ]);

            // Jika gagal
            if ($response->failed() || !$response->json('success')) {
                return back()->withErrors([
                    'login' => $response->json('message') ?? 'Login gagal, coba lagi.',
                ])->withInput();
            }

            // Ambil token & user
            $data = $response->json('data');

            // Simpan ke session
            Session::put('token', $data['access_token']);
            Session::put('user', $data['user']);

            return redirect()->route('dashboard')->with('success', 'Login berhasil!');

        } catch (\Exception $e) {
            return back()->withErrors([
                'login' => 'Terjadi kesalahan koneksi ke server: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    /**
     * Logout dari backend & hapus session
     */
    public function logout()
    {
        $baseUrl = config('api.base_url');

        try {
            $token = Session::get('token');

            if ($token) {
                // Panggil API logout backend (opsional kalau API support logout)
                Http::withToken($token)->post($baseUrl . '/auth/logout');
            }
        } catch (\Exception $e) {
            // Kalau gagal logout di backend, tetap lanjut hapus session
        }

        // Hapus session
        Session::forget(['token', 'user']);
        Session::flush();

        return redirect()->route('auth.login')->with('success', 'Anda sudah logout.');
    }
}
