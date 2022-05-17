<?php
Route::get('/danh-mucs/{id}',[
	'uses' => 'CategoryController@category',
	'as' => 'category'
]);