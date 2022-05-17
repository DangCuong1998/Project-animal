<?php 

Route::get('finished',[
	'uses' => 'ContactController@contact',
	'as' => 'backend.contact'
]);
 
Route::get('contact-finished',[
	'uses' => 'contactController@finished',
	'as' => 'contact.finished'
]);

Route::post('contact-unfinished',[
	'uses' => 'contactController@unfinished',
	'as' => 'contact.unfinished'
]);

Route::get('contact-delete/{id}',[
	'uses' => 'contactController@delete',
	'as' => 'contact-delete'
]);

Route::get('contact-edit/{id}',[
	'uses' => 'contactController@edit',
	'as' => 'contact-edit'
]);

Route::post('contact-edit',[
	'uses' => 'contactController@update',
	'as' => 'contact-edit'
]);

?>