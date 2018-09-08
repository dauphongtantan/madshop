<?php 
Route::get('orders.html', 'OrdersController@orders')->name('orders');
Route::get('view-orders.html', 'Order_detailController@view')->name('viewOrders');
Route::get('delete-orders/{id}', 'OrdersController@delete')->name('deleteOrders');
 ?>
