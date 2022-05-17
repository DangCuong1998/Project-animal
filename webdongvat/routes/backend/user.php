<?php 
Route::get('user',[
	'uses' =>'UserController@index',
	'as' => 'backend.user'
]);

Route::get('user-add',[
	'uses' =>'UserController@add',
	'as' => 'backend.user-add'
]);

Route::post('user-add',[
	'uses' =>'UserController@save',
	'as' => 'backend.user-add'
]);
Route::get('user-destroy/{id}',[
	'uses' =>'UserController@destroy',
	'as' => 'backend.user-destroy'
]);
// Route::get('user','UserController@add')->name('backend.user');
?>