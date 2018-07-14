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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user_login','UserProfileController@index')->name('login');

Route::get('tables','UserProfileController@view')->name('list');

Route::get('add','UserProfileController@add')->name('add');

Route::post('add','UserProfileController@saveUser')->name('saveUser');

Route::get('edit/{id}','UserProfileController@editUser')->name('editUser');

Route::get('delete/{id}','UserProfileController@deleteUser')->name('deleteUser');



// Route::get('/demos', function () {
//     return view('welcome');
// });


