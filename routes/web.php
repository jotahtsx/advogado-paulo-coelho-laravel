<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Route::get('/', 'WebController@home')->name('home');
    Route::get('/sobre', 'WebController@about')->name('about');
    Route::get('/contato', 'WebController@contact')->name('contact');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('entrar', 'AuthController@login')->name('login.do');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', 'AuthController@home')->name('home');
    });

    Route::get('sair', 'AuthController@logout')->name('logout');
});
