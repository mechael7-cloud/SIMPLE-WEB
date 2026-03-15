<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;

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
        'pages' => Page::all(),
    ]);
});
// Route::get('/pages', function () {
//     return view('pages', [
//         'title' => 'Home Page',
//     ]);
// });

Route::get('/pages/{id}', function ($id) 
{
    $page = [
        'page' => Page::find($id),
    ];
    return view('pages', $page);
});

