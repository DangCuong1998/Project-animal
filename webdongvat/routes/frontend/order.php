<?php 
// route Đặt hàng
Route::get('order',[
	'uses' => 'OrderController@order',
	'as' => 'order'
]);
Route::post('order',[
	'uses' => 'OrderController@orderstore',
	'as' => 'order'
]);
 ?>