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

Route::get('/user','DemoController@index')->name('index');
Route::get('/user/create','DemoController@create')->name('create');
Route::post('/user/store','DemoController@store');
Route::get('/user/show/{id}','DemoController@show')->name('show');
Route::get('/user/edit/{id}','DemoController@edit')->name('edit');
Route::post('/user/update/{id}','DemoController@update');
Route::get('/user/delete/{id}','DemoController@delete')->name('delete');