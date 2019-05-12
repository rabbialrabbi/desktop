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

Route::get('/', function(){
    return redirect('/client');
});

Route::post('/search', 'ClientController@index');

Route::resource('client','ClientController');
Route::resource('booking','BookingController');

Route::get('/admin', 'ProfileController@index');
Route::get('/user/{id}', 'ProfileController@userview');

Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
