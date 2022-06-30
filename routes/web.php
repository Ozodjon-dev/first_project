<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --------------------------------------------------------

Route::group(['namespace'=>'Post'], function(){

    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DeleteController')->name('posts.delete');

});

// --------------------------------------------------------

// Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::get('/posts/users', 'PostController@users');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/home', 'MyPlaceController@home');
Route::get('/products', 'MyPlaceController@products');

Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'contactController@index')->name('contacts.index');
Route::get('/main', 'mainController@index')->name('main.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
