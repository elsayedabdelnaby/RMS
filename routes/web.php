<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/Menus', 'MenusController');
Route::resource('/Items', 'ItemsController');
Route::resource('/Meals', 'MealsController');
Route::resource('/Orders', 'OrdersController');
Route::resource('/Customers', 'CustomersController');
