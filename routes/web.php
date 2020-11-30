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

 Route::get('/homex', 'HomeController@index')->name('home');

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
Route::get('/admin/charities','adminController@getAllCharities')->name('admin.charities');

################### call all controller 
// to call all the function in the controller
Route::resource('/charity','charityController');
Route::resource('/admin','charityController');
Route::resource('/pCase','pCaseController');
Route::resource('/home','HomeController');

Route::get('/showPublicProfile/{pCase_id}', 'HomeController@pubSearchPro')->name('home.pubSearchPro');

##############endregion
// show home page
Route::view('/tryhomepage', 'home');
//**  show charity public profile page
//Route::view('/charprof', 'charity/charPublicPro');
//***  show charity profile
Route::view('/charprof', 'charity/charPro');

//***  show public search
Route::get('/publicSearch', 'HomeController@pubSearch');