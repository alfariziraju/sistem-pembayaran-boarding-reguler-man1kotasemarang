<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/rekap', function () {
    return view('rekap');
})->middleware(['auth', 'verified'])->name('rekap');

Route::get('/akses', function () {
    return view('akses');
})->middleware(['auth', 'verified'])->name('akses');

Route::get('/daftarsiswa', function () {
    return view('daftarsiswa');
})->middleware(['auth', 'verified'])->name('daftarsiswa');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
