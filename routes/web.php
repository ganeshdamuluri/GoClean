<?php

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
/*  static pages */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
//Route::get('/booking', function () {
//    return view('booking');
//});
Route::get('/booking', 'BookingController@order')->name('booking');
Route::post('/booking', 'BookingController@addorder')->name('addorder');

Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
