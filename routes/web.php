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

Auth::routes();


// Route::resource('/users', 'userController@index');
// Route::resource('/users/create', 'userController@create');
// Route::resource('/users/store', 'userController@store');
// Route::resource('/users/edit', 'userController@edit');
// Route::resource('/users/update', 'userController@update');
// Route::resource('/users/show', 'userController@show');
// Route::resource('/users/delete', 'userController@destroy');

// Route::get('/home', 'HomeController@index');


// Route::resource('/posts', 'postController@index');
// Route::resource('/posts/create', 'postController@create');
// Route::resource('/posts/store', 'postController@store');
// Route::resource('/posts/edit', 'postController@edit');
// Route::resource('/posts/update', 'postController@update');
// Route::resource('/posts/show', 'postController@show');
// Route::resource('/posts/delete', 'postController@destroy');


// Route::resource('/roles', 'roleController@index');
// Route::resource('/roles/create', 'roleController@create');
// Route::resource('/roles/store', 'roleController@store');
// Route::resource('/roles/edit', 'roleController@edit');
// Route::resource('/roles/update', 'roleController@update');
// Route::resource('/roles/show', 'roleController@show');
// Route::resource('/roles/delete', 'roleController@destroy');


// Route::resource('/categories', 'CategoryController@index');
// Route::resource('/categories/create', 'CategoryController@create');
// Route::resource('/categories/store', 'CategoryController@store');
// Route::resource('/categories/edit', 'CategoryController@edit');
// Route::resource('/categories/update', 'CategoryController@update');
// Route::resource('/categories/show', 'CategoryController@show');
// Route::resource('/categories/delete', 'CategoryController@destroy');


// Route::resource('/permissions', 'PermissionController@index');
// Route::resource('/permissions/create', 'PermissionController@create');
// Route::resource('/permissions/store', 'PermissionController@store');
// Route::resource('/permissions/edit', 'PermissionController@edit');
// Route::resource('/permissions/update', 'PermissionController@update');
// Route::resource('/permissions/show', 'PermissionController@show');
// Route::resource('/permissions/delete', 'PermissionController@destroy');

Route::group(['middleware' => ['auth']], function() {
	Route::get('/home',
	[
		'as'=>'home',
		'uses'=>'HomeController@index'
	]);
	Route::resource('/users', 'userController@index');
	Route::resource('/users/create', 'userController@create');
	Route::resource('/users/store', 'userController@store');
	Route::resource('/users/edit', 'userController@edit');
	Route::resource('/users/password', 'userController@password');
	Route::resource('/users/reset', 'userController@reset');
	Route::resource('/users/update', 'userController@update');
	Route::resource('/users/show', 'userController@show');
	Route::resource('/users/upload', 'userController@upload');
	Route::resource('/users/imageUpload', 'userController@imageUpload');
	Route::resource('/users/delete', 'userController@destroy');
	Route::get('/roles',
	[
		'as'=>'roles.index',
		'uses'=>'RoleController@index',
		'middleware' => ['permission:role-list|role-create|role-edit|role-delete']
	]);
	Route::get('/roles/create',
	[
		'as'=>'roles.create',
		'uses'=>'RoleController@create',
		'middleware' => ['permission:role-create']
	]);
	Route::post('/roles/store',
	[
		'as'=>'roles.store',
		'uses'=>'RoleController@store',
		'middleware' => ['permission:role-create']
	]);
	Route::get('/roles/show',
	[
		'as'=>'roles.show',
		'uses'=>'RoleController@show'
	]);
	Route::get('/roles/edit/{id}',
	[
		'as'=>'roles.edit',
		'uses'=>'RoleController@edit',
		'middleware' => ['permission:role-edit']
	]);
	Route::patch('/roles/update/{id}',
	[
		'as'=>'roles.update',
		'uses'=>'RoleController@update',
		'middleware' => ['permission:role-edit']
	]);
	Route::get('/roles/delete/{id}',
	[
		'as'=>'roles.delete',
		'uses'=>'RoleController@destroy',
		'middleware' => ['permission:role-delete']
	]);
	Route::get('/permissions',
	[
		'as'=>'permissions.index',
		'uses'=>'PermissionController@index',
		'middleware' => ['permission:permi-list|permi-create|permi-edit|permi-delete']
	]);
	Route::get('/permissions/create',
	[
		'as'=>'permissions.create',
		'uses'=>'PermissionController@create',
		'middleware' => ['permission:permi-create']
	]);
	Route::post('/permissions/store',
	[
		'as'=>'permissions.store',
		'uses'=>'PermissionController@store',
		'middleware' => ['permission:permi-create']
	]);
	Route::get('/permissions/show',
	[
		'as'=>'permissions.show',
		'uses'=>'PermissionController@show'
	]);
	Route::get('/permissions/edit/{id}',
	[
		'as'=>'permissions.edit',
		'uses'=>'PermissionController@edit',
		'middleware' => ['permission:permi-edit']
	]);
	Route::patch('/permissions/update/{id}',
	[
		'as'=>'permissions.update',
		'uses'=>'PermissionController@update',
		'middleware' => ['permission:permi-edit']
	]);
	Route::get('/permissions/delete/{id}',
	[
		'as'=>'permissions.delete',
		'uses'=>'PermissionController@destroy',
		'middleware' => ['permission:permi-delete']
	]);
	Route::get('/posts',
	[
		'as'=>'posts.index',
		'uses'=>'PostController@index',
		'middleware' => ['permission:pos-list|pos-create|pos-edit|pos-delete']
	]);
	Route::get('/posts/create',
	[
		'as'=>'posts.create',
		'uses'=>'PostController@create',
		'middleware' => ['permission:pos-create']
	]);
	Route::post('/posts/store',
	[
		'as'=>'posts.store',
		'uses'=>'PostController@store',
		'middleware' => ['permission:pos-create']
	]);
	Route::get('/posts/show',
	[
		'as'=>'posts.show',
		'uses'=>'PostController@show'
	]);
	Route::get('/posts/edit/{id}',
	[
		'as'=>'posts.edit',
		'uses'=>'PostController@edit',
		'middleware' => ['permission:pos-edit']
	]);
	Route::patch('/posts/update/{id}',
	[
		'as'=>'posts.update',
		'uses'=>'PostController@update',
		'middleware' => ['permission:pos-edit']
	]);
	Route::get('/posts/delete/{id}',
	[
		'as'=>'posts.destroy',
		'uses'=>'PostController@destroy',
		'middleware' => ['permission:pos-delete']
	]);
	Route::get('/categories',
	[
		'as'=>'categories.index',
		'uses'=>'CategoryController@index',
		'middleware' => ['permission:cat-list|cat-create|cat-edit|cat-delete']
	]);
	Route::get('/categories/create',
	[
		'as'=>'categories.create',
		'uses'=>'CategoryController@create',
		'middleware' => ['permission:cat-create']
	]);
	Route::post('/categories/store',
	[
		'as'=>'categories.store',
		'uses'=>'CategoryController@store',
		'middleware' => ['permission:cat-create']
	]);
	Route::get('/categories/show',
	[
		'as'=>'categories.show',
		'uses'=>'CategoryController@show'
	]);
	Route::get('/categories/edit/{id}',
	[
		'as'=>'categories.edit',
		'uses'=>'CategoryController@edit',
		'middleware' => ['permission:cat-edit']
	]);
	Route::patch('/categories/update/{id}',
	[
		'as'=>'categories.update',
		'uses'=>'CategoryController@update',
		'middleware' => ['permission:cat-edit']
	]);
	Route::get('/categories/delete/{id}',
	[
		'as'=>'categories.destroy',
		'uses'=>'CategoryController@destroy',
		'middleware' => ['permission:cat-delete']
	]);
});