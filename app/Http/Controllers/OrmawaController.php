<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrmawaController extends Controller
{
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('api.base_url');
    }

    public function index()
    {
        $token = session('token');

        $ormawasResponse = Http::withToken($token)->get("{$this->baseUrl}/ormawas");
        $ormawas = $ormawasResponse->successful()
            ? collect($ormawasResponse->json()['data'] ?? [])->map(function($item){
                $item['logo'] = isset($item['logo']) ? asset($item['logo']) : null;
                $item['jenis_ormawa'] = $item['jenis_ormawa'] ?? ['id' => null, 'nama' => 'N/A'];
                return $item;
            })
            : [];
            // dd($ormawas);
        $jenisOrmawas = Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas")->successful()
            ? Http::withToken($token)->get("{$this->baseUrl}/jenis-ormawas")->json()
            : [];

            // dd($jenisOrmawas);
        $trashedResponse = Http::withToken($token)->get("{$this->baseUrl}/ormawas/trashed/list");
        $trashed = $trashedResponse->successful()
            ? $trashedResponse->json()['data'] ?? []
            : [];

            // dd($trashed);
        return view('admin.components.ormawa.index', compact('ormawas', 'jenisOrmawas', 'trashed'));
    }

    public function store(Request $request)
    {
        $token = session('token');
        $response = Http::withToken($token)
            ->attach('logo', file_get_contents($request->file('logo')), $request->file('logo')->getClientOriginalName())
            ->post("{$this->baseUrl}/ormawas", $request->except('logo'));

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Ormawa berhasil ditambahkan')
            : back()->with('error', $response['message'] ?? 'Gagal menambahkan Ormawa');
    }

    public function update(Request $request, $id)
    {
        $token = session('token');
        $http = Http::withToken($token);

        if ($request->hasFile('logo')) {
            $http = $http->attach('logo', file_get_contents($request->file('logo')), $request->file('logo')->getClientOriginalName());
        }

        $response = $http->put("{$this->baseUrl}/ormawas/{$id}/update", $request->except('logo'));

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Ormawa berhasil diupdate')
            : back()->with('error', $response['message'] ?? 'Gagal mengupdate Ormawa');
    }

    public function destroy($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->delete("{$this->baseUrl}/ormawas/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Ormawa berhasil dihapus')
            : back()->with('error', $response['message'] ?? 'Gagal menghapus Ormawa');
    }

    public function restore($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->post("{$this->baseUrl}/ormawas/restore/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Ormawa berhasil direstore')
            : back()->with('error', $response['message'] ?? 'Gagal merestore Ormawa');
    }

    public function forceDelete($id)
    {
        $token = session('token');
        $response = Http::withToken($token)->delete("{$this->baseUrl}/ormawas/force-delete/{$id}");

        return $response->successful()
            ? back()->with('success', $response['message'] ?? 'Ormawa berhasil dihapus permanen')
            : back()->with('error', $response['message'] ?? 'Gagal menghapus Ormawa permanen');
    }
}
