<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.beranda' ,[
        "title" => "Beranda"
    ]);
});
Route::get('/beranda', function () {
    return view('page.beranda' ,[
        "title" => "Beranda"
    ]);
});

Route::get('/blog', function () {
    return view('page.blog' ,[
        "title" => "Blok"
    ]);
});


Route::get('/about', function () {
    return view('page.about' ,[
        "title" => "tentang"
    ]);
});


// admin 


