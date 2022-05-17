<?php
Route::get('/lien-he',[
	'uses' => 'ContactController@contact_user',
	'as' => 'contact'
]);
Route::post('/lien-he',[
	'uses' => 'ContactController@contactstore',
	'as' => 'contact'
]);