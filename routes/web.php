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

Route::get('/', 'HomeController@index')->name('index');
Route::post('/signout', 'HomeController@signoutPOST')->name('');

//Social Login
Route::get('/auth/{provider}', 'UserSocialController@redirectToProvider')->name('');
Route::get('/auth/{provide}/callback', 'UserSocialController@handleProviderCallback')->name('');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
