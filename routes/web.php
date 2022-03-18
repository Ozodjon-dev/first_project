<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', 'PostController@index');
Route::get('/', 'PostController@main');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/users', 'PostController@users');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/home', 'MyPlaceController@home');
Route::get('/products', 'MyPlaceController@products');