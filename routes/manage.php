<?php

Route::get('/login', 'AuthController@showLoginForm')->name('cpanel.showLoginForm');
Route::post('/login', 'AuthController@login')->name('cpanel.login');

Route::group(['middleware' => 'auth:manager'], function() {
    Route::get('/', 'DashboardController@index')->name('cpanel.dashboard');

    // Manager Route
    Route::group(['prefix' => 'managers', 'middleware' => ['role:superadministrator|administrator']], function() {
        Route::get('/', 'ManagerController@index')->name('cpanel.manager.index');
        Route::get('/create', 'ManagerController@showCreateForm')->name('cpanel.manager.showCreateForm');
        Route::post('/store', 'ManagerController@store')->name('cpanel.manager.store');
    });
});