<?php

use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {
//       return view('admin.admin');
//   });


Route::get('/', function () {
    return view('user.home'); // Halaman utama
});

Route::get('/user', function () {
    return view('user.menu'); // Halaman menu di folder user
});

Route::get('/admin', function () {
    return view('admin.admin'); // Halaman kontak
});

Route::get('/menu', function () {
    return view('menu.menu'); // Halaman kontak
});

Route::get('/views', function () {
    return view('form.ketupat');
});

Route::get('/ketupat', function () {
    return view('form.ketupat');
});

Route::get('/views', function () {
    return view('form.nasi');
});

Route::get('/nasi', function () {
    return view('form.nasi'); // Halaman kontak
});

Route::get('/views', function () {
    return view('form.tahu');
});

Route::get('/tahu', function () {
    return view('form.tahu'); // Halaman kontak
});

Route::get('/views', function () {
    return view('form.minuman');
});

Route::get('/minuman', function () {
    return view('form.minuman'); // Halaman kontak
});
