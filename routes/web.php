<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// users rout
Route::resource('/users', 'userController@index');
Route::resource('users/create', 'userController@create');
// Route::resource('users/store', 'userController@store');
Route::post('users/store', 'userController@store');
Route::resource('users/edit', 'userController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index');

// posts rout
Route::resource('/posts', 'postController@index');
Route::resource('/posts/create', 'postController@create');

// music rout
