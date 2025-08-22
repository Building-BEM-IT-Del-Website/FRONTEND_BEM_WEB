<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function profile()
    {
        $token = session('token');

        $response = Http::withToken($token)
            ->get('http://localhost:8000/api/auth/me');

        if ($response->failed()) {
            return redirect()->route('auth.login');
        }

        return view('profile', ['user' => $response->json()]);
    }
}
