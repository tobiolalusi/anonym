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

Route::get('/', 'WriteController@index')->name('home');

Auth::routes();

Route::resource('/writes', 'WriteController')->only(['store', 'show', 'destroy']);

Route::view('/profile', 'profile')->middleware('auth');
