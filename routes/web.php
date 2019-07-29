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
    return redirect('/about');
});

Route::post('/ticket/search', 'ticketController@index');
Route::get('/ticket','ticketController@index');
Route::get('/ticket/{id}', 'ticketController@ticketDetails');
Route::get('/ticket/{id}/confirm', 'ticketController@ticketConfirm');


Route::post('/post/create', 'bookingController@store');
Route::get('/booking/create', 'bookingController@create');
Route::get('/booking/{id}/confirm', 'bookingController@confirmStatus');
Route::get('/booking/{id}/deny', 'bookingController@denyStatus');
Route::post('/booking/{id}', function (){
    return view('sendMail');
});

Route::get('/admin', 'ProfileController@index');
Route::get('/admin/{id}', 'ProfileController@deleteUser');

Route::get('/user', 'ProfileController@userview');
Route::get('/user/{id}', 'ProfileController@userProfileShow');
Route::post('/user/{id}', 'ProfileController@userProfileStore');

Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
