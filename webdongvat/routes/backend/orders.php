<?php 

Route::get('orders',[
	'uses' => 'OrdersController@index',
	'as' => 'backend.orders'
]);
Route::get('orderafter',[
	'uses' => 'OrdersController@orderafter',
	'as' => 'backend.orderafter'
]);
Route::get('ordererror',[
	'uses' => 'OrdersController@ordererror',
	'as' => 'backend.ordererror'
]);
Route::get('ordersinfor/{id}',[
	'uses' => 'OrdersController@ordersinfor',
	'as' => 'backend.ordersinfor'
]);

Route::post('ordersinfor/{id}',[
	'uses' => 'OrdersController@update',
	'as' => 'backend.ordersinfor'
]);
Route::get('orders-destroy/{id}',[
	'uses' => 'OrdersController@destroy',
	'as' => 'backend.orders-destroy'
]);

Route::get('detail-order/{id}',[
	'uses' => 'OrdersController@detailorder',
	'as' => 'backend.detail'
]);
?>

