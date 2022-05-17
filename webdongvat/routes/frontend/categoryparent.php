<?php

Route::get('/danh-muc/{id}',[
	'uses' => 'CategoryparentController@category',
	'as' => 'categoryparent'
]);