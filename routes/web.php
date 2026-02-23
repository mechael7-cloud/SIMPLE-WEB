<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login', [
        'title' => 'Login Page',
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register Page',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home Page',
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
