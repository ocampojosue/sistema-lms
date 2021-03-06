<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/config', 'UserController@config')->name('config');

Route::resource('category', 'CategoryController');
Route::patch('category', 'CategoryController@update');

Route::resource('provider', 'ProviderController');
Route::patch('provider', 'ProviderController@update');

Route::resource('product', 'ProductController');
Route::patch('product', 'ProductController@update');

Route::resource('client', 'ClientController');
Route::patch('client', 'ClientController@update');

Route::resource('sale', 'SaleController');
Route::patch('sale', 'SaleController@update');

Route::post('/config','UserController@update')->name('user.update');