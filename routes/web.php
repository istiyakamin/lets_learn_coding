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

Route::get('/loginform', 'StaticController@loginForm')->name('loginform');

Route::post('/login', 'Auth\AuthController@login')->name('login');

Route::middleware(['test'])->group(function () {
    Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');
    Route::get('/profiles', 'StaticController@showAllData')->name('profiles');

    Route::get('/posts/create', 'PostController@showForm')->name('posts.create');
    Route::get('/logout', 'Auth\AuthController@logOut')->name('logout');

});

