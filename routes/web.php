<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Login Page',
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'Home Page',
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Home Page',
    ]);
});
