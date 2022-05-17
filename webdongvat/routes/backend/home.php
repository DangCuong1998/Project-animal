<?php

Route::get('/home',[
	'uses' => 'HomeController@index',
	'as' => 'backend'
]);