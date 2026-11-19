<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Atillo - Contact Page
Route::get('/contact', function () {
    return view('contact');
});
