<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Rubie - About
Route::view('/about', 'about')->name('about');
