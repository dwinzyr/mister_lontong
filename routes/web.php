<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MenuControllers;

// Halaman utama
Route::get('/', function () {
    return view('user.home'); // Halaman utama
});

Route::get('user', [MenuControllers::class, 'index'])->name('user.menu');

// Route::get('/user', function () {
//     return view('user.menu'); // Halaman menu di folder user
// });

// Halaman admin
Route::get('/admin', function () {
    return view('admin.admin'); // Halaman admin
});

// Halaman menu
Route::get('/menu', function () {
    return view('menu.menu'); // Halaman menu
});

// Halaman form ketupat
Route::get('/ketupat', function () {
    return view('form.ketupat'); // Halaman form ketupat
});

// Halaman form nasi
Route::get('/nasi', function () {
    return view('form.nasi'); // Halaman form nasi
});

// Halaman form tahu
Route::get('/tahu', function () {
    return view('form.tahu'); // Halaman form tahu
});

// Halaman form minuman
Route::get('/minuman', function () {
    return view('form.minuman'); // Halaman form minuman
});

// Halaman dashboard admin
Route::get('/dashboard', function () {
    return view('admin.dashboard'); // Halaman dashboard admin
});

// Resource route untuk MakananController
Route::resource('makanans', MakananController::class);
Route::get('/create', [MakananController::class, 'create'])->name('makanans.create');
Route::get('/menu', [MakananController::class, 'menu'])->name('menu');

