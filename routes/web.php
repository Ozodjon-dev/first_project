<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');

Route::get('/home', 'MyPlaceController@home');
Route::get('/products', 'MyPlaceController@products');