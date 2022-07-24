<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Route::get('/', 'WebController@home')->name('home');
});
