<?php

Route::get('/danh-muc',[
	'uses' => 'AdoptController@index',
	'as' => 'adopt'
]);
// 