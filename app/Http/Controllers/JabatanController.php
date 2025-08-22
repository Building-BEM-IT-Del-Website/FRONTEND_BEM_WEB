<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JabatanController extends Controller
{
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('api.base_url');
    }

    public function index()
    {
        $token = session('token');

        $jabatans = Http::withToken($token)->get("{$this->baseUrl}/jabatan")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jabatan")->json()
            : [];

        $trashed = Http::withToken($token)->get("{$this->baseUrl}/jabatan/trashed/list")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jabatan/trashed/list")->json()
            : [];

        return view('admin.components.jabatan.index', compact('jabatans', 'trashed'));
    }

    public function store(Request $request)
    {
        $token = session('token');
        $response = Http::withToken($token)->post("{$this->baseUrl}/jabatan", $request->all());

        if ($response->successful()) {
            return back()->with('success', $response['message'] ?? 'Jabatan berhasil ditambahkan');
        }

        // Ambil pesan error dari BE
        if ($response->status() === 422) {
            $msg = $response['message'] ?? 'Terjadi kesalahan saat menambahkan jabatan';
            $restoreId = $response['restore_id'] ?? null;
            return back()->with('error', $msg)->with('restore_id', $restoreId);
        }

        return back()->with('error', $response['message'] ?? 'Gagal menambahkan jabatan');
    }

    public function update(Request $request, $id)
    {
        $token = session('token');
        $response = Http::withToken($token)->put("{$this->baseUrl}/jabatan/{$id}", $request->all());

        if ($response->successful()) {
            return back()->with('success', $response['message'] ?? 'Jabatan berhasil diupdate');
        }

        if ($response->status() === 422) {
            $msg = $response['message'] ?? 'Terjadi kesalahan saat mengupdate jabatan';
            $restoreId = $response['restore_id'] ?? null;
            return back()->with('error', $msg)->with('restore_id', $restoreId);
        }

        return back()->with('error', $response['message'] ?? 'Gagal mengupdate jabatan');
    }

    public function destroy($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->delete("{$this->baseUrl}/jabatan/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Jabatan berhasil dihapus')
            : back()->with('error', $response['message'] ?? 'Gagal menghapus jabatan');
    }

    public function restore($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->post("{$this->baseUrl}/jabatan/restore/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Jabatan berhasil direstore')
            : back()->with('error', $response['message'] ?? 'Gagal merestore jabatan');
    }
}
