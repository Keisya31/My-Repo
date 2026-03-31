<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
// Route::get('/', fn() => view('home'));
// Route::get('/about', fn() => view('about'));
// Route::get('/projects', fn() => view('projects'));
// Route::get('/contact', fn() => view('contact'));
