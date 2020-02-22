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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@getLocale');

Route::group(['prefix' => '{lang?}', 'where' => ['lang' => 'vi-VN|en-US'], 'middleware' => 'locale'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/change-language', 'HomeController@changeLanguage')->name('change-language');
    Route::get('/show-locate', 'HomeController@showLocate');
});