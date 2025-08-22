<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {  View::composer('*', function ($view) {
            $token = Session::get('token');

            if ($token && !Session::has('user')) {
                try {
                    $baseUrl = config('api.base_url');
                    $response = Http::withToken($token)->get($baseUrl . '/auth/me');

                    if ($response->successful() && $response->json('success')) {
                        Session::put('user', $response->json('data'));
                    }
                } catch (\Exception $e) {
                    // log error, jangan ganggu view
                }
            }

            $user = Session::get('user');
            // dd($user);

            if (is_array($user)) {
                $user = (object) $user;
            }

            $view->with('authUser', $user);
            $view->with('authToken', $token);
        });
    }
}
