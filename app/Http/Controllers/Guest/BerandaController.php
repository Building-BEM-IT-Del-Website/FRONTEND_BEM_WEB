<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BerandaController extends Controller
{
    public function pengumumanAgendaAspirasi()
    {
        $baseUrl = config('api.base_url');

        // pengumuman
        $responsePengumuman = Http::get($baseUrl . '/pengumuman/terbaru');
        $pengumuman = $responsePengumuman->successful() ? $responsePengumuman->json()['data'] : [];

        // agenda
        $responseAgenda = Http::get($baseUrl . '/pengumuman/agenda-terdekat');
        $agenda = $responseAgenda->successful() ? $responseAgenda->json()['data'] : [];

        // aspirasi 
        $responseAspirasi = Http::get($baseUrl . '/aspirasi/disetujui');
        $aspirasi = $responseAspirasi->successful() ? $responseAspirasi->json()['data'] : [];

        // membagi data aspirasi jadi 2 kolom
        $aspirasiColumns = collect($aspirasi)->chunk(ceil(count($aspirasi) / 2));

        return view('guess.layout.beranda', [
            'pengumuman' => $pengumuman,
            'agenda' => $agenda,
            'aspirasiColumns' => $aspirasiColumns, // Kirim data yang sudah dibagi
        ]);
    }

    public function sampaikanAspirasi(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'nama' => 'nullable|string|max:255',
        ]);

        $baseUrl = config('api.base_url');

        $response = Http::post($baseUrl . '/aspirasi/tambah', [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama' => $request->nama,
        ]);

        if ($response->successful()) {
            // Jika berhasil, kembali ke beranda ke section aspirasi dengan pesan sukses
            return redirect('/#aspirasi')->with('success', 'Aspirasi berhasil dikirim!');
        } else {
            // Jika gagal, kembali dengan pesan error
            return back()->with('error', 'Terjadi kesalahan saat mengirim aspirasi. Silakan coba lagi.');
        }
    }
}