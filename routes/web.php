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


########### start auth with admin ###############

Route::get('site', 'adminController@site')->middleware('auth:web')->name('site');
Route::get('adminDash', 'adminController@dashboard')->middleware('auth:admin')->name('dashboard');

Route::get('admin/login', 'adminController@adminLogin')->name('admin.Login');
Route::post('admin/login', 'adminController@checkAdminLogin')->name('save.admin.login');


############## end auth with admin ################ 