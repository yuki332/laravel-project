<?php

Route::get('/', function(){
	return 'vue.index';
})->name('index');

Route::get('test', function(){
	return 'test vue';
})->name('test');
