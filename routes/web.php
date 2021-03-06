<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('/', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('admin/users', 'UsersController@index')->name('admin.users.index');

Route::post('impersonations', 'ImpersonationController@store')->name('impersonations.store');
Route::delete('impersonations', 'ImpersonationController@destroy')->name('impersonations.destroy');