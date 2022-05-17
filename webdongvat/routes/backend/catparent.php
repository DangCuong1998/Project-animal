<?php 

Route::get('catparent',[
	'uses' => 'CatParentController@index',
	'as' => 'backend.catparent'
]);

Route::get('catparent-create',[
	'uses' => 'CatParentController@create',
	'as' => 'backend.catparent-create'
]);

Route::post('catparent-create',[
	'uses' => 'CatParentController@store',
	'as' => 'backend.catparent-create'
]);

Route::get('catparent-edit/{id}',[
	'uses' => 'CatParentController@edit',
	'as' => 'backend.catparent-edit'
]);

Route::post('catparent-edit/{id}',[
	'uses' => 'CatParentController@update',
	'as' => 'backend.catparent-edit'
]);
Route::get('catparent-destroy/{id}',[
	'uses' => 'CatParentController@destroy',
	'as' => 'backend.catparent-destroy'
]);
?>

