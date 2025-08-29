<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/contact', function () {
    return view('contact');
});