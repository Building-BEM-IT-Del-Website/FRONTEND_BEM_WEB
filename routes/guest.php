<?php

use App\Http\Controllers\Guest\BerandaController;
use App\Http\Controllers\Guest\OrmawaController;
use App\Http\Controllers\Guest\PengumumanController;
use Illuminate\Support\Facades\Route;


Route::middleware('authenticated')->group(function () {

    Route::get('/contoh', function () {
        return view('guess.guess');
    });
    Route::get('/home', function () {
        return view('home.home');
    });

    // branch andika
// beranda
    Route::get('/', [BerandaController::class, 'pengumumanAgendaAspirasi'])->name('beranda');
    Route::post('/', [BerandaController::class, 'sampaikanAspirasi'])->name('storeAspirasi');
// pengumuman
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('halamanPengumuman');
    Route::get('/detail-pengumuman/{id}', [PengumumanController::class, 'show'])->name('detailPengumuman');
// ormawa
    Route::get('organisasi,', [OrmawaController::class, 'index'])->name('ormawa.index');
    Route::get('/detail-organisasi/{id}', [OrmawaController::class, 'show'])->name('ormawa.show');

    // ormawa
    Route::get('/organisasi', function () {
        return view('guess.layout.organisasi');
    });

    // detail ormawa
    Route::get('/detail-organisasi', function () {
        return view('guess.layout.detail-organisasi');
    });

    // berita
    Route::get('/berita', function () {
        return view('guess.layout.berita');
    });

    // detail berita
    Route::get('/detail-berita', function () {
        return view('guess.layout.detail-berita');
    });

    // pengumuman
    // Route::get('/pengumuman', function () {
    //     return view('guess.layout.pengumuman');
    // });

    // detail pengumuman
    Route::get('/detail-pengumuman', function () {
        return view('guess.layout.detail-pengumuman');
    });

    // sturuktur organisasi
    Route::get('/struktur-organisasi', function () {
        return view('guess.layout.struktur-organisasi');
    });

    // visi misi
    Route::get('/visi-misi', function () {
        return view('guess.layout.visi-misi');
    });

    // kalender
    Route::get('/kalender', function () {
        return view('guess.layout.kalender');
    });
});
