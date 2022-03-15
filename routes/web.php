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

Route::get('/', "HomeController@index");

Route::get('/featured', "HomeController@featured");

Route::get('/vehicles', "CarController@index");
Route::get('/vehicles/{id}', 'CarController@show');
Route::post('/vehicles', 'CarController@store');
Route::put('/{id}','CarController@update');
Route::delete('/{id}', 'CarController@destroy');

Route::get('/services', "ServicesController@index");
Route::get('/services/{id}', 'ServicesController@show');
Route::post('/services','ServicesController@store');
Route::put('/services/{id}','ServicesController@update');
Route::delete('/services/{id}','ServicesController@destroy');

Route::get('/reviews', "ReviewController@index");
Route::get('/reviews/{id}', 'ReviewController@show');
Route::post('/reviews','ReviewController@store');
Route::put('/reviews/{id}','ReviewController@update');
Route::delete('/reviews/{id}','ReviewController@destroy');


Route::get('/contact', "ContactController@index");
Route::get('/contact/{id}', 'ContactController@show');
Route::post('/contact','ContactController@store');
Route::put('/contact/{id}','ContactController@update');
Route::delete('/contact/{id}','ContactController@destroy');
//admin route
Route::get('/admin', "AdminController@index");
Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/featured', 'AdminController@featured');
Route::get('/admin/trial', 'AdminController@admintrial');
Route::get('/admin/orders', 'AdminController@orders');
Route::get('/admin/reviews', 'AdminController@reviews');

                                                                                                                                                                                      



//home routes
Route::get('/{id}', 'HomeController@show');
Route::post('/', 'HomeController@store');
Route::put('/{id}','HomeController@update');
Route::delete('/{id}','HomeController@destroy');