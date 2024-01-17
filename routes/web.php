<?php

use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
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
    Route::post('/pendaftar/create', [ParticipantsController::class, 'store'])->name('pendaftar.store');

    Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {
        //Pendaftar
        Route::get('/pendaftar', [ParticipantsController::class, 'index'])->name('pendaftar');
        Route::post('/pendaftar/{id}/update-status-diterima', [ParticipantsController::class, 'updateStatusDiterima']);
        Route::post('/pendaftar/{id}/update-status-ditolak', [ParticipantsController::class, 'updateStatusDitolak']);
        Route::get('/pendaftar/{id}/edit', [ParticipantsController::class,'edit'])->name('pendaftar.edit');
        Route::put('/pendaftar/{id}', [ParticipantsController::class,'update'])->name('pendaftar.update');
        Route::delete('/pendaftar/{id}/delete', [ParticipantsController::class, 'destroy'])->name('pendaftar.destroy');
    });

    Route::prefix('siswa')->middleware(['auth', 'role:User'])->group(function () {
        Route::get('/pendaftaran/status', [SiswaController::class, 'index'])->name('siswa.status');
        Route::get('/pendaftaran/{id}/edit', [SiswaController::class,'edit'])->name('siswa.edit');
    });
});

require __DIR__.'/auth.php';
