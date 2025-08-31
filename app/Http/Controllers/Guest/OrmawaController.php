<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrmawaController extends Controller
{
    public function index()
    {
        $baseUrl = config('api.base_url');
        $response = Http::get($baseUrl . '/ormawas/list');

        $data = $response->successful() ? $response->json()['data'] : [];

        $himpunan = $data['Himpunan Mahasiswa'] ?? [];
        $ukm = $data['Unit Kegiatan Mahasiswa'] ?? [];

        return view('guess.layout.organisasi', [
            'himpunan' => $himpunan,
            'ukm' => $ukm,
        ]);
    }
}
