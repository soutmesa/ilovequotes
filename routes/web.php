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
    return view('auth.login');
});

// users rout
Route::resource('/users', 'userController@index');
Route::resource('/users/create', 'userController@create');
Route::resource('/users/store', 'userController@store');
Route::resource('/users/edit', 'userController@edit');
Route::resource('/users/update', 'userController@update');
Route::resource('/users/show', 'userController@show');
Route::resource('/users/delete', 'userController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');

// posts rout
Route::resource('/posts', 'postController@index');
Route::resource('/posts/create', 'postController@create');
Route::resource('/posts/store', 'postController@store');
Route::resource('/posts/edit', 'postController@edit');
Route::resource('/posts/update', 'postController@update');
Route::resource('/posts/show', 'postController@show');
Route::resource('/posts/delete', 'postController@destroy');

// roles rout
Route::resource('/roles', 'roleController@index');
Route::resource('/roles/create', 'roleController@create');
Route::resource('/roles/store', 'roleController@store');
Route::resource('/roles/edit', 'roleController@edit');
Route::resource('/roles/update', 'roleController@update');
Route::resource('/roles/show', 'roleController@show');
Route::resource('/roles/delete', 'roleController@destroy');

// categories rout
Route::resource('/categories', 'CategoryController@index');
Route::resource('/categories/create', 'CategoryController@create');
Route::resource('/categories/store', 'CategoryController@store');
Route::resource('/categories/edit', 'CategoryController@edit');
Route::resource('/categories/update', 'CategoryController@update');
Route::resource('/categories/show', 'CategoryController@show');
Route::resource('/categories/delete', 'CategoryController@destroy');