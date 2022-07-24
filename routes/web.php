<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Route::get('/', 'WebController@home')->name('home');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::get('home', 'AuthController@home')->name('home');
});
