<?php 

Route::get('news',[
	'uses' => 'NewsController@index',
	'as' => 'backend.news'
]);

Route::get('news-create',[
	'uses' => 'NewsController@create',
	'as' => 'backend.news-create'
]);

Route::post('news-create',[
	'uses' => 'NewsController@store',
	'as' => 'backend.news-create'
]);

Route::get('news-edit/{id}',[
	'uses' => 'NewsController@edit',
	'as' => 'backend.news-edit'
]);

Route::post('news-edit/{id}',[
	'uses' => 'NewsController@update',
	'as' => 'backend.news-edit'
]);
Route::get('news-destroy/{id}',[
	'uses' => 'NewsController@destroy',
	'as' => 'backend.news-delete'
]);
?>

