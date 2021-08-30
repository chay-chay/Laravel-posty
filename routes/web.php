<?php

use Illuminate\Support\Facades\Route;


// Route::get('/posts', function () {
//     return view('posts.index');
// });

// Route::get('/', function () {
//     return view('posts.index');
// });

// Route::get('/', function () {
//     return view('posts.index');
// });

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@sevices');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
