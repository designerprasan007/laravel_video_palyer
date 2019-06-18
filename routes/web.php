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
Route::resources(['videos'=>'VideoController']);
Route::patch('/views/edit','VideoController@edit');
Route::get('/views/show', 'VideoController@show');
Route::delete('/delete/video/{id}','VideoController@destroy');
Route::get('/admin', 'VideoController@admin')->name('admin');
Auth::routes();
Route::get('/setting', 'HomeController@setting');
Route::get('/trending', 'HomeController@trending');
Route::get('/sports', 'HomeController@sports');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/views/admin', 'VideoController@admin');


