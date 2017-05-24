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

Route::get('/admin', function () {
    return Auth::check()? redirect('/home') : redirect('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);

	Route::group(['prefix'=>'users'], function(){
		Route::resource('', 'userController@index');
		Route::resource('create', 'userController@create');
		Route::resource('store', 'userController@store');
		Route::resource('show', 'userController@show');
		Route::resource('edit', 'userController@edit');
		Route::resource('delete', 'userController@destroy');
		Route::resource('update', 'userController@update');
		Route::resource('password', 'userController@password');
		Route::resource('reset', 'userController@reset');
		Route::resource('upload', 'userController@upload');
		Route::resource('imageUpload', 'userController@imageUpload');
	});

	Route::group(['prefix'=>'roles'], function(){
		Route::get('', [ 'as'=>'roles.index', 'uses'=>'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
		Route::get('create', [ 'as'=>'roles.create', 'uses'=>'RoleController@create', 'middleware' => ['permission:role-create']]);
		Route::post('store', [ 'as'=>'roles.store', 'uses'=>'RoleController@store', 'middleware' => ['permission:role-create']]);
		Route::get('show', [ 'as'=>'roles.show', 'uses'=>'RoleController@show']);
		Route::get('edit/{id}', [ 'as'=>'roles.edit', 'uses'=>'RoleController@edit', 'middleware' => ['permission:role-edit']]);
		Route::patch('update/{id}', [ 'as'=>'roles.update', 'uses'=>'RoleController@update', 'middleware' => ['permission:role-edit']]);
		Route::get('delete/{id}', [ 'as'=>'roles.delete', 'uses'=>'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
	});

	Route::group(['prefix'=>'permissions'], function(){
		Route::get('', [ 'as'=>'permissions.index', 'uses'=>'PermissionController@index', 'middleware' => ['permission:permi-list|permi-create|permi-edit|permi-delete']]);
		Route::get('create', [ 'as'=>'permissions.create', 'uses'=>'PermissionController@create', 'middleware' => ['permission:permi-create']]);
		Route::post('store', [ 'as'=>'permissions.store', 'uses'=>'PermissionController@store', 'middleware' => ['permission:permi-create']]);
		Route::get('show', [ 'as'=>'permissions.show', 'uses'=>'PermissionController@show']);
		Route::get('edit/{id}', [ 'as'=>'permissions.edit', 'uses'=>'PermissionController@edit', 'middleware' => ['permission:permi-edit']]);
		Route::patch('update/{id}', [ 'as'=>'permissions.update', 'uses'=>'PermissionController@update', 'middleware' => ['permission:permi-edit']]);
		Route::get('delete/{id}', [ 'as'=>'permissions.delete', 'uses'=>'PermissionController@destroy', 'middleware' => ['permission:permi-delete']]);
	});

	Route::group(['prefix'=>'posts'], function(){
		Route::get('', [ 'as'=>'posts.index', 'uses'=>'PostController@index', 'middleware' => ['permission:pos-list|pos-create|pos-edit|pos-delete']]);
		Route::get('create', [ 'as'=>'posts.create', 'uses'=>'PostController@create', 'middleware' => ['permission:pos-create']]);
		Route::post('store', [ 'as'=>'posts.store', 'uses'=>'PostController@store', 'middleware' => ['permission:pos-create']]);
		Route::get('show', [ 'as'=>'posts.show', 'uses'=>'PostController@show']);
		Route::get('edit/{id}', [ 'as'=>'posts.edit', 'uses'=>'PostController@edit', 'middleware' => ['permission:pos-edit']]);
		Route::patch('update/{id}', [ 'as'=>'posts.update', 'uses'=>'PostController@update', 'middleware' => ['permission:pos-edit']]);
		Route::get('delete/{id}', [ 'as'=>'posts.destroy', 'uses'=>'PostController@destroy', 'middleware' => ['permission:pos-delete']]);
	});

	Route::group(['prefix'=>'categories'], function(){
		Route::get('', [ 'as'=>'categories.index', 'uses'=>'CategoryController@index', 'middleware' => ['permission:cat-list|cat-create|cat-edit|cat-delete']]);
		Route::get('create', [ 'as'=>'categories.create', 'uses'=>'CategoryController@create', 'middleware' => ['permission:cat-create']]);
		Route::post('store', [ 'as'=>'categories.store', 'uses'=>'CategoryController@store', 'middleware' => ['permission:cat-create']]);
		Route::get('show', [ 'as'=>'categories.show', 'uses'=>'CategoryController@show']);
		Route::get('edit/{id}', [ 'as'=>'categories.edit', 'uses'=>'CategoryController@edit', 'middleware' => ['permission:cat-edit']]);
		Route::patch('update/{id}', [ 'as'=>'categories.update', 'uses'=>'CategoryController@update', 'middleware' => ['permission:cat-edit']]);
		Route::get('delete/{id}', [ 'as'=>'categories.destroy', 'uses'=>'CategoryController@destroy', 'middleware' => ['permission:cat-delete']]);
	});

});

Route::get('/', function(){
	
});