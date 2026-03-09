<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['text' => 'ghazali']);
});

Route::get('/kon', function () {
    return view('beranda', ['text' => 'kon']);
});

Route::get('/kont', function () {
    return view('beranda');
});


