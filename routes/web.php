<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JenisOrmawaController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\WebAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('authenticated')->group(function () {
    Route::get('login', [WebAuthController::class, 'showLogin'])->name('auth.login');
    Route::post('login', [WebAuthController::class, 'login'])->name('auth.login.submit');
});

Route::middleware('auth.session')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [WebAuthController::class, 'logout'])->name('auth.logout');


Route::resource('jabatans', JabatanController::class);
Route::prefix('jabatans')->group(function () {
    Route::get('trashed', [JabatanController::class, 'trashed'])->name('jabatans.trashed');
    Route::post('restore/{id}', [JabatanController::class, 'restore'])->name('jabatans.restore');
    Route::delete('force-delete/{id}', [JabatanController::class, 'forceDelete'])->name('jabatans.forceDelete');
});


Route::resource('jenis-ormawas', JenisOrmawaController::class);

Route::prefix('jenis-ormawas')->group(function () {
    Route::get('trashed', [JenisOrmawaController::class, 'trashed'])->name('jenis-ormawas.trashed');
    Route::post('restore/{id}', [JenisOrmawaController::class, 'restore'])->name('jenis-ormawas.restore');
    Route::delete('force-delete/{id}', [JenisOrmawaController::class, 'forceDelete'])->name('jenis-ormawas.forceDelete');
});

Route::resource('ormawas', OrmawaController::class);
Route::prefix('ormawas')->group(function () {
    Route::get('trashed', [OrmawaController::class, 'trashed'])->name('ormawas.trashed');
    Route::patch('restore/{id}', [OrmawaController::class, 'restore'])->name('ormawas.restore');
    Route::delete('force-delete/{id}', [OrmawaController::class, 'forceDelete'])->name('ormawas.forceDelete');
});
});


require __DIR__ . '/guest.php';
