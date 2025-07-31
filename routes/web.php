<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('siswa.index');
});

Route::get('/create', function () {
    return view('siswa.create');
});
