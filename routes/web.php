<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Rubie - About
Route::view('/about', 'about')->name('about');

//Atillo - Contact Page
Route::get('/contact', function () {
    return view('contact');
});
