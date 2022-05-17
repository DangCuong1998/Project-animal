<?php 

Route::get('product_images',[
	'uses' => 'ProductImagesController@index',
	'as' => 'backend.product_images'
]);

Route::get('product_images-create',[
	'uses' => 'ProductImagesController@create',
	'as' => 'backend.product_images-create'
]);

Route::post('product_images-create',[
	'uses' => 'ProductImagesController@store',
	'as' => 'backend.product_images-create'
]);

Route::get('product_images-edit/{id}',[
	'uses' => 'ProductImagesController@edit',
	'as' => 'backend.product_images-edit'
]);

Route::post('product_images-edit/{id}',[
	'uses' => 'ProductImagesController@update',
	'as' => 'backend.product_images-edit'
]);
Route::get('product_images-destroy/{id}',[
	'uses' => 'ProductImagesController@destroy',
	'as' => 'backend.product_images-destroy'
]);
?>

