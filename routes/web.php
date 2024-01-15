<?php

use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Pendaftar
    Route::post('/pendaftar/create', [PendaftarController::class, 'store'])->name('pendaftar.store');

    Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {
        //Pendaftar
        Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');
        Route::post('/pendaftar/{pendaftar}/update-status-diterima', [PendaftarController::class, 'updateStatusDiterima']);
        Route::post('/pendaftar/{pendaftar}/update-status-ditolak', [PendaftarController::class, 'updateStatusDitolak']);
    });

    Route::prefix('siswa')->middleware(['auth', 'role:User'])->group(function () {
        Route::get('/pendaftaran/status', [SiswaController::class, 'index'])->name('siswa.status');
    });
});

require __DIR__.'/auth.php';
