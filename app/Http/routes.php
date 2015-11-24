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
