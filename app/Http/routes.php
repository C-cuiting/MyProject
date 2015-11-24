<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>this is my web！！</h1>';
});
Route::get('/hi/{name}',function($name){
   return  "my name is {$name}";
});

Route::get('/products','ProductController@index');
Route::get('/product/show/{id}','productController@show');
Route::get('/product/edit/{id?}','productController@edit');
Route::get('/product/save/{id?}','productController@save');
Route::get('/product/delete/{id?}','productController@delete');