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
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::get('/logout', 'UserController@logout');

Route::get('/vehicles', "CarController@index");
Route::post('/addcar', 'CarController@store');
Route::put('/{id}','CarController@update');
Route::get('/vehicles/{id}','CarController@destroy');

Route::get('/services', "ServicesController@index");
Route::get('/services/{id}', 'ServicesController@show');
Route::post('/services','ServicesController@store');
Route::put('/services/{id}','ServicesController@update');
Route::delete('/services/{id}','ServicesController@destroy');

Route::post('/reviews/add','ReviewController@store');
Route::get('/reviews', "ReviewController@index");
Route::get('/reviews/{id}', 'ReviewController@show');
Route::put('/reviews/{id}','ReviewController@update');
Route::delete('/reviews/{id}','ReviewController@destroy');

Route::post('/featured/add','OfferController@store');
Route::get('/featured', "OfferController@index");
Route::get('/featured/{id}', 'OfferController@show');
Route::put('/featured/{id}','OfferController@update');
Route::get('/offers/{id}','OfferController@destroy');


Route::get('/contact', "ContactController@index");
Route::get('/contact/{id}', 'ContactController@show');
Route::post('/contact/messssage','ContactController@store');
Route::put('/contact/{id}','ContactController@update');
Route::delete('/contact/{id}','ContactController@destroy');
//admin route
Route::get('/admin', "AdminController@index");
// Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/featured', 'AdminController@featured');
Route::get('/admin/message', 'AdminController@message');
Route::get('/admin/orders', 'AdminController@orders');
Route::get('/admin/reviews', 'AdminController@reviews');
Route::get('/reviews/add', 'ReviewsController@store');

Route::get('/admin/login', 'AdminController@handleLogin');
Route::get('/admin/cars/information','AdminController@carinfopage');
Route::get('/admin/addcar/information','AdminController@addcarinfo');
//car info
Route::post('/admin/carinfo/addcolor','carInfo@addcolor');
Route::post('/admin/carinfo/addtype','carInfo@addtype');
Route::post('/admin/carinfo/addmodel','carInfo@addmodel');
Route::post('/bookcar','OrderController@store');


Route::post('/sendmessage','ContactController@store');
Route::get('/search/vehicle','CarController@search');



