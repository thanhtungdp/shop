<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/category',function(){
	return View::make("category");
});
Route::get('/product',function(){
	return View::make("product");
});
Route::get('/test',function(){
	return View::make("category");
});