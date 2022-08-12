<?php
Route::get('/task', 'Shopify\Http\Controllers\TaskController@test');
Route::get('shopify','NtShopify\Http\Controllers\ShopifyController@index');
Route::get('authorize','NtShopify\Http\Controllers\ShopifyController@authorizeShopify');
