<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JenisOrmawaController extends Controller
{
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('api.base_url');
    }

    public function index()
    {
        $token = session('token');

        $jenisOrmawas = Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas")->json()
            : [];

        $trashed = Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas/trashed/list")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas/trashed/list")->json()
            : [];

        return view('admin.components.Jenis_Ormawa.index', compact('jenisOrmawas', 'trashed'));
    }

    public function store(Request $request)
    {
        $token = session('token');
        $response = Http::withToken($token)->post("{$this->baseUrl}/jenis-ormawas", $request->all());

        if ($response->successful()) {
            return back()->with('success', $response['message'] ?? 'Jenis Ormawa berhasil ditambahkan');
        }

        $msg = $response['message'] ?? 'Gagal menambahkan Jenis Ormawa';
        return back()->with('error', $msg);
    }

    public function update(Request $request, $id)
    {
        $token = session('token');
        $response = Http::withToken($token)->put("{$this->baseUrl}/jenis-ormawas/{$id}", $request->all());

        if ($response->successful()) {
            return back()->with('success', $response['message'] ?? 'Jenis Ormawa berhasil diupdate');
        }

        $msg = $response['message'] ?? 'Gagal mengupdate Jenis Ormawa';
        return back()->with('error', $msg);
    }

    public function destroy($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->delete("{$this->baseUrl}/jenis-ormawas/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Jenis Ormawa berhasil dihapus')
            : back()->with('error', $response['message'] ?? 'Gagal menghapus Jenis Ormawa');
    }

    public function trashed()
    {
        $token = session('token');
        $trashed = Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas/trashed/list")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas/trashed/list")->json()
            : [];
        return view('admin.components.jenis-ormawa.index', ['jenisOrmawas' => [], 'trashed' => $trashed]);
    }

    public function restore($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->post("{$this->baseUrl}/jenis-ormawas/restore/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Jenis Ormawa berhasil direstore')
            : back()->with('error', $response['message'] ?? 'Gagal merestore Jenis Ormawa');
    }

    public function forceDelete($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->delete("{$this->baseUrl}/jenis-ormawas/force-delete/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Jenis Ormawa berhasil dihapus permanen')
            : back()->with('error', $response['message'] ?? 'Gagal menghapus Jenis Ormawa permanen');
    }
}
