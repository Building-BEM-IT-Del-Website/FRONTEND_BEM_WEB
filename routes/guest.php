<?php

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
Route::get('/', function(){
    return view('guess.layout.beranda');
});


// ormawa
Route::get('/organisasi', function(){
    return view('guess.layout.organisasi');
});

// detail ormawa
Route::get('/detail-organisasi', function(){
    return view('guess.layout.detail-organisasi');
});

// berita
Route::get('/berita', function(){
    return view('guess.layout.berita');
});

// detail berita
Route::get('/detail-berita', function(){
    return view('guess.layout.detail-berita');
});

// pengumuman
Route::get('/pengumuman', function(){
    return view('guess.layout.pengumuman');
});

// detail pengumuman
Route::get('/detail-pengumuman', function(){
    return view('guess.layout.detail-pengumuman');
});

// sturuktur organisasi
Route::get('/struktur-organisasi', function(){
    return view('guess.layout.struktur-organisasi');
});

// visi misi
Route::get('/visi-misi', function(){
    return view('guess.layout.visi-misi');
});

// kalender
Route::get('/kalender', function(){
    return view('guess.layout.kalender');
});
});
