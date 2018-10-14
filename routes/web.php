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
Route::any('/dashboard/signup', 'SpaController@index')->name('register');
Route::any('/dashboard/login', 'SpaController@index')->name('login');
Route::any('/dashboard/{any?}', 'SpaController@index')->where('any', '.*');