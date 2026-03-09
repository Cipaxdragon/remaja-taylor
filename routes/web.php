<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/tes', function () {
    return view('beranda', [
        'text' => 'Gays'
    ]);
});


