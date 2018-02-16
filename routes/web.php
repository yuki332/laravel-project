<?php

Route::view('/', 'welcome')->name('home');

Route::prefix('register')->as('register.')->group(function(){
	Route::view('/', 'auth.register')->name('create');
	Route::post('/', 'RegisterController@store')->name('store');
});

Route::prefix('login')->as('login.')->group(function(){
	Route::view('/', 'auth.login')->name('show');
	Route::post('/', 'LoginController@store')->name('login');
	Route::get('/logout', 'LoginController@destroy')->name('logout');
});

// register and login function done!! 1/30 - 31 2018.

Route::prefix('app')->as('app.')->group(function(){
	Route::view('/', 'app.index')->name('index');
});

Route::prefix('laravel')->as('laravel.')->group(function(){
	Route::get('/', function(){
		return 'laravel index';
	})->name('index');
	Route::get('/test', function(){
		return 'laravel test';
	})->name('test');
});
