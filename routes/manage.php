<?php

Route::get('/login', 'AuthController@showLoginForm')->name('cpanel.showLoginForm');
Route::post('/login', 'AuthController@login')->name('cpanel.login');

Route::group(['middleware' => 'auth:manager'], function() {
    Route::get('/', function() {
        return 'abc';
    });
});