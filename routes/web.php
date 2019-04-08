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

Route::get('post/index', 'Backend\PostController@index')->name('post.index');
Route::get('post/create', 'Backend\PostController@create')->name('post.create');
Route::get('post/edit/{id}', 'Backend\PostController@edit')->name('post.edit');
Route::post('post/delete/{id}', 'Backend\PostController@destroy')->name('post.delete');