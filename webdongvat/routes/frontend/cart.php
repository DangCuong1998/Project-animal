<?php
Route::get('add-cartss/{id}','CartController@getAddCart')->name('add-cart');
Route::get('list-cart-1','CartController@listCart');
Route::get('delete-product/{id}','CartController@deleteCart');
Route::post('update-cart','CartController@updateCart');