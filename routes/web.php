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



Route::group(
    [
        'prefix' => 'admin',
    ],
    function() {

        Route::get('/', 'AdminController@index')->name('admin.index');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UsersController@index')->name('user.index');

            Route::get('create', 'UsersController@create')->name('user.create');
            Route::post('store', 'UsersController@store')->name('user.store');

            Route::get('edit', 'UsersController@edit')->name('user.edit');
            Route::post('update', 'UsersController@update')->name('user.update');

            Route::get('show/{id}', 'UsersController@show')->name('user.show');
            Route::get('destroy', 'UsersController@destroy')->name('user.destroy');
        });

        Route::group(['prefix' => 'role'], function () {

            Route::get('/', 'RolesController@index')->name('role.index');
            Route::post('update', 'RolesController@update')->name('role.update');
        });
});