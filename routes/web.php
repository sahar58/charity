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

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/admin/login', 'Auth\LoginController@showAdminLogin');
Route::post('/admin/login', 'Auth\LoginController@checkAdminLogin')->name('checkAdmin');
Route::get('/admin/home', 'adminController@adminHome');

Auth::routes();

Route::get('/charity/login', 'Auth\LoginController@showCharityLogin');
Route::post('/charity/login', 'Auth\LoginController@checkCharityLogin')->name('checkCharity');
Route::get('/charity/home', 'charityController@charityHome');

//Route::view('admin/home', 'admin')->middleware('auth');

Route::get('/admin/createCharity','adminController@createCharity')->name('createCharity');
Route::post('/admin/storeCharity','adminController@storeCharity')->name('storeCharity');

