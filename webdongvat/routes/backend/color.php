<?php 

Route::get('color',[
	'uses' => 'ColorController@index',
	'as' => 'backend.color'
]);

Route::get('color-create',[
	'uses' => 'ColorController@create',
	'as' => 'backend.color-create'
]);

Route::post('color-create',[
	'uses' => 'ColorController@store',
	'as' => 'backend.color-create'
]);

Route::get('color-edit/{id}',[
	'uses' => 'ColorController@edit',
	'as' => 'backend.color-edit'
]);

Route::post('color-edit/{id}',[
	'uses' => 'ColorController@update',
	'as' => 'backend.color-edit'
]);
Route::get('color-destroy/{id}',[
	'uses' => 'ColorController@destroy',
	'as' => 'backend.color-destroy'
]);
?>

