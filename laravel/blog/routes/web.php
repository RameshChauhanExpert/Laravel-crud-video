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

Route::get('/videos','VideoController@index')->name('video.index');
Route::any('/videos/create','VideoController@create')->name('video.create');
Route::any('/videos/store','VideoController@store')->name('video.store');
Route::any('/videos/show/{id}','VideoController@show')->name('video.show');
Route::any('/videos/edit/{id}','VideoController@edit')->name('video.edit');
Route::any('/videos/destroy/{id}','VideoController@destroy')->name('video.destroy');
Route::any('/videos/update/{id}','VideoController@update')->name('video.update');