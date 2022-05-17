<?php

Route::get('/volunteer',[
	'uses' => 'VolunteeruController@index',
	'as' => 'volunteer'
]);