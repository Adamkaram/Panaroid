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

// Route::get('/', 'UsersController@index' );
// Route::get('Product', 'ProductController@index' );
// Route::get('Product/{$id}', 'ProductController@show');
// Route::get('/Product','ProductController@index');
Route::resource('Product','ProductController');
// Route::POST('P/save','ProductController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
