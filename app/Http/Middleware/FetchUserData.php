<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class FetchUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          if ($request->session()->has('token')) {
            if (!$request->session()->has('user')) {
                $token = $request->session()->get('token');
                $response = Http::withToken($token)->get('http://localhost:8000/api/auth/me');

                if ($response->successful()) {
                    $request->session()->put('user', $response->json());
                }
            }
        }

        return $next($request);
    }
}
