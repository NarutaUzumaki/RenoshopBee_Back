<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('product', 'ProductController', ['except' => ['edit', 'show', 'store']]);

Route::post('order/add', 'OrderController@addOrder');
Route::get('products/catalog', 'ProductController@getCatalog');


Route::group(array('prefix' => 'product'), function (){
   Route::get('/', 'ProductController@index');
   Route::get('/{id}', 'ProductController@getProductById');
});

Route::group(array('prefix' => 'cart'), function(){
   Route::get('/get', 'CartController@getFromCart');
   Route::post('/add', 'CartController@addToCart');
});
