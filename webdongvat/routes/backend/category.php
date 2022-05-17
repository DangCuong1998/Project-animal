<?php 

Route::get('category',[
	'uses' => 'CategoryController@index',
	'as' => 'backend.category'
]);

Route::get('category-create',[
	'uses' => 'CategoryController@create',
	'as' => 'backend.category-create'
]);

Route::post('category-create',[
	'uses' => 'CategoryController@store',
	'as' => 'backend.category-create'
]);

Route::get('category-edit/{id}',[
	'uses' => 'CategoryController@edit',
	'as' => 'backend.category-edit'
]);

Route::post('category-edit/{id}',[
	'uses' => 'CategoryController@update',
	'as' => 'backend.category-edit'
]);
Route::get('category-destroy/{id}',[
	'uses' => 'CategoryController@destroy',
	'as' => 'backend.category-destroy'
]);
?>

