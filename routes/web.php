<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index');

Route::get('/home', 'MyPlaceController@home');
route::get('/products', 'MyPlaceController@products');