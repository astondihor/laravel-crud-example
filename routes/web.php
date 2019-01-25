<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::delete('users/{id}', 'UsersController@destroy')->name('admin.users.destroy');
    Route::patch('users/{id}', 'UsersController@update')->name('admin.users.update');
    Route::get('users/{id}/edit', 'UsersController@edit')->name('admin.users.edit');
    Route::post('users', 'UsersController@store')->name('admin.users.store');
    Route::get('users/create', 'UsersController@create')->name('admin.users.create');
    Route::get('users/{id}', 'UsersController@show')->name('admin.users.show');
    Route::get('users', 'UsersController@index')->name('admin.users.index');
});
