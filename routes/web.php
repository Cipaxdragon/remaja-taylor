<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.beranda' ,[
        "title" => "Beranda"
    ]);
})->name('beranda');

Route::redirect('/beranda', '/');

Route::get('/blog', function () {
    return view('page.blog' ,[
        "title" => "Tips & Artikel"
    ]);
});

Route::get('/layanan', function () {
    return view('page.layanan' ,[
        "title" => "Layanan"
    ]);
});

Route::get('/about', function () {
    return view('page.about' ,[
        "title" => "tentang"
    ]);
});

Route::get('/tes', function () {
    return view('page.tes' ,[
        "title" => "tes"
    ]);
});


