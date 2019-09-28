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
Route::get('/chuyen-muc/{url}', 'HomeController@category')->name('');
Route::get('/bai-viet/{url}', 'HomeController@post');

//Social Login
Route::get('/auth/{provider}', 'UserSocialController@redirectToProvider')->name('');
Route::get('/auth/{provide}/callback', 'UserSocialController@handleProviderCallback')->name('');

Route::get('/admin/signin', 'HomeController@adminSignin')->name('');
Route::post('/admin/signin', 'HomeController@adminSigninPOST')->name('');
Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/admin/setting', 'AdminController@setting')->name('setting');
Route::post('/admin/setting', 'AdminController@settingPOST')->name('setting');

Route::get('/admin/chuyenmuc', 'AdminController@chuyenmuc')->name('chuyenmuc');
Route::get('/admin/chuyenmuc/them', 'AdminController@themchuyenmuc')->name('chuyenmuc');
Route::post('/admin/chuyenmuc/them', 'AdminController@themchuyenmucPOST')->name('chuyenmuc');
Route::get('/admin/chuyenmuc/sua/{id}', 'AdminController@suachuyenmuc')->name('chuyenmuc');
Route::post('/admin/chuyenmuc/sua/{id}', 'AdminController@suachuyenmucPOST')->name('chuyenmuc');
Route::get('/admin/chuyenmuc/xoa/{id}', 'AdminController@xoachuyenmuc')->name('chuyenmuc');

//Bài viết
Route::get('/admin/baiviet', 'AdminController@baiviet')->name('baiviet');
Route::get('/admin/baiviet/them', 'AdminController@thembaiviet')->name('baiviet');
Route::post('/admin/baiviet/them', 'AdminController@thembaivietPOST')->name('baiviet');
Route::get('/admin/baiviet/sua/{id}', 'AdminController@suabaiviet')->name('baiviet');
Route::post('/admin/baiviet/sua/{id}', 'AdminController@suabaivietPOST')->name('baiviet');
Route::get('/admin/baiviet/xoa/{id}', 'AdminController@xoabaiviet')->name('baiviet');
//Hệ phái
Route::get('/admin/hephai', 'AdminController@hephai')->name('hephai');
Route::get('/admin/hephai/them', 'AdminController@themhephai')->name('hephai');
Route::post('/admin/hephai/them', 'AdminController@themhephaiPOST')->name('hephai');
Route::get('/admin/hephai/sua/{id}', 'AdminController@suahephai')->name('hephai');
Route::post('/admin/hephai/sua/{id}', 'AdminController@suahephaiPOST')->name('hephai');
Route::get('/admin/hephai/xoa/{id}', 'AdminController@xoahephai')->name('hephai');

Route::get('/admin/upload', 'AdminController@upload')->name('');
Route::post('/admin/upload', 'AdminController@uploadPOST')->name('');

//Image
Route::post('/admin/image/upload', 'ImageController@uploadImage')->name('');
Route::post('/admin/image/delete', 'ImageController@deleteImage')->name('');

//User
Route::get('/admin/user', 'AdminController@user')->name('user');
