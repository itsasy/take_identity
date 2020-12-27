<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('/', 'Auth\LoginController@login')->name('auth.login');