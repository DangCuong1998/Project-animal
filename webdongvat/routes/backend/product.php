<?php 

Route::get('product',[
	'uses' => 'ProductController@index',
	'as' => 'backend.product'
]);

Route::get('product-create',[
	'uses' => 'ProductController@create',
	'as' => 'backend.product-create'
]);

Route::post('product-create',[
	'uses' => 'ProductController@store',
	'as' => 'backend.product-create'
]);

Route::get('product-edit/{id}',[
	'uses' => 'ProductController@edit',
	'as' => 'backend.product-edit'
]);

Route::post('product-edit/{id}',[
	'uses' => 'ProductController@update',
	'as' => 'backend.product-edit'
]);

Route::get('product-delete/{id}',[
	'uses' => 'ProductController@delete',
	'as' => 'backend.product-delete'
]);
Route::get('product-sale',[
	'uses' => 'ProductController@sale',
	'as' => 'backend.productsale'
]);
?>