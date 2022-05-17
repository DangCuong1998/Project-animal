<?php

Route::get('/news',[
	'uses' => 'NewsController@index',
	'as' => 'news'
]);
// 