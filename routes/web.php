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

Route::get('/', 'StaticController@index')->name('home');
Route::get('/tour', 'StaticController@tourPage')->name('tour');
Route::post('/reg', 'StaticController@registration')->name('reg');
Route::get('/profiles', 'StaticController@showAllData')->name('profiles');
Route::get('/login', 'StaticController@login')->name('login');
