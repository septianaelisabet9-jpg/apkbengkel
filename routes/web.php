<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\BengkelController@index');
Route::get('/login', 'App\Http\Controllers\BengkelController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\BengkelController@aksiLogin');

Route::get('/register', 'App\Http\Controllers\BengkelController@formRegister');
Route::post('/register/aksi', 'App\Http\Controllers\BengkelController@aksiRegister');

Route::get('/home', 'App\Http\Controllers\BengkelController@home');
Route::get('/logout', 'App\Http\Controllers\BengkelController@logout');