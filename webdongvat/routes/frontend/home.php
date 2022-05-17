<?php

Route::get('/','HomeController@index')->name('home');

// ->name('home');
	

// Route::get('/',[
// 	'uses' => 'HomeController@index',
// 	'as' => 'home'
// ]);