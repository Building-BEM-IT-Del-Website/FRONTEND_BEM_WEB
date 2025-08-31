<?php

// frontend/app/Http/Controllers/Guest/PengumumanController.php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        $baseUrl = config('api.base_url');

        // Ambil semua parameter dari URL pengguna (page, search, year, month)
        $queryParams = $request->query();

        // 1. Panggil API untuk daftar pengumuman, teruskan semua parameter
        $responsePengumuman = Http::get($baseUrl . '/pengumuman/halaman', $queryParams);
        $pengumumanData = $responsePengumuman->successful() ? $responsePengumuman->json()['data'] : [];

        // 2. Panggil API untuk daftar arsip
        $responseArchives = Http::get($baseUrl . '/pengumuman/arsip');
        $archives = $responseArchives->successful() ? $responseArchives->json()['data'] : [];

        // 3. Kirim semua data yang didapat ke view
        return view('guess.layout.pengumuman', [
            'pengumumanData' => $pengumumanData,
            'archives' => $archives
        ]);
    }

    public function show($id)
    {
        $baseUrl = config('api.base_url');
        $response = Http::get($baseUrl . "/pengumuman/detail/{$id}");

        // Jika API gagal atau tidak menemukan data, tampilkan halaman 404
        if (!$response->successful()) {
            abort(404);
        }

        $pengumuman = $response->json()['data'];

        return view('guess.layout.detail-pengumuman', [
            'pengumuman' => $pengumuman
        ]);
    }
}