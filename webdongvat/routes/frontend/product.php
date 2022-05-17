<?php

Route::get('/san-pham/{slug}',[
	'uses' => 'ProductController@product',
	'as' => 'product'
]);
Route::post('/san-pham/{slug}',[
	'uses' => 'ProductController@productcm',
	'as' => 'product'
]);

// 