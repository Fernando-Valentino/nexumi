<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('pages.dashboard.admin');
});
Route::get('/umkm', function () {
    return view('pages.dashboard.umkm');
});
Route::get('/konsumen', function () {
    return view('pages.dashboard.konsumen');
});
Route::get('/pages-kontak', function () {
    return view('pages.kontak');
});
