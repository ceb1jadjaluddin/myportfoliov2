<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');