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
