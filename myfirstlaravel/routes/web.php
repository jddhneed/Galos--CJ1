<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    })->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');