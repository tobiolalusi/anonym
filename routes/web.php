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

Route::get('/', 'StoryController@index')->name('home');

Auth::routes();

Route::resource('/stories', 'StoryController')->only(['store', 'show', 'destroy']);

Route::view('/profile', 'profile')->middleware('auth')->name('profile');
