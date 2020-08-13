<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('product', 'ProductController', ['except' => ['edit', 'show', 'store']]);
Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@getProductById');
Route::get('products/catalog', 'ProductController@getCatalog');
Route::get('cart/get', 'CartController@getFromCart');

Route::post('cart/add', 'CartController@addToCart');
Route::post('order/add', 'OrderController@addOrder');

