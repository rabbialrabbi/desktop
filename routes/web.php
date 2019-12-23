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
// start after update

Route::get('/agency/{id}', 'HomeController@agencyDetails');

Route::get('/ticket','ticketController@index');
Route::post('/ticket/search', 'ticketController@search')->name('home.search');


Route::get('/booking/{from_id}/{to_id}', 'BookingController@showAgency')->name('show.agency');
Route::get('/bookingbus', 'BookingController@showBus');
Route::get('/bookingseat/{bus_id}/{booking_date}', 'BookingController@showSeat')->name('seat.show');
Route::post('/booking', 'BookingController@confirmBooking');

Route::get('/bookingError/{msg}', 'BookingController@error');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('index', 'AdminController@index');
    Route::get('route/create', 'AdminController@showRoute')->name('add.route');
    Route::post('route', 'AdminController@storeRoute');
    Route::get('city/create', 'AdminController@showCity')->name('add.city');
    Route::post('city', 'AdminController@storeCity');
    Route::get('bus/create', 'AdminController@showBus')->name('add.bus');
    Route::post('bus', 'AdminController@storeBus');
    Route::get('agency/create', 'AdminController@showAgency')->name('add.agency');
    Route::post('agency', 'AdminController@storeAgency');
});

//axios request

Route::get('getdata',function (){
    return [65,59,80,81,56,55,40,10,30,50];
});
// end after update




Route::get('/test', function(){
    return view('welcome');
});
//Route::post('/other', 'AdminController@storeAgency');
Route::get('/ticket/{id}', 'ticketController@ticketDetails');
Route::get('/ticket/{id}/confirm', 'ticketController@ticketConfirm');


Route::post('/post/create', 'BookingController@store');

Route::get('/booking/create', 'BookingController@create');
Route::get('/booking/{id}/confirm', 'BookingController@confirmStatus');
Route::get('/booking/{id}/deny', 'BookingController@denyStatus');
Route::post('/booking/{id}', function (){
    return view('sendMail');
});

Route::get('/book', 'BookingController@booking');

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
