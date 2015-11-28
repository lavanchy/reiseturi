<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
/*
Route::get('/', function () {
    return view('startpage');
});*/

Route::get('/profile', function () {
    return view('welcome');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/customerLogin', function () {
    return view('customerLogin');
});

Route::get('/adminOverview', function() {
    return view('adminOverview');
});

Route::get('/adminTripEdit', function() {
    return view('adminTripEdit');
});

//Routes from Loic

//reset Password
Route::get('/auth/password', function(){
    return view ('auth/password');
});
/*
 * Login & Registration
 * see https://laraveltips.wordpress.com/category/user-login-and-registration/
 * 09.11.15
 */
// Authentication routes...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

//HomeC.
Route::get('/', 'Auth\HomeController@getTrips');
Route::get('/book/{id}', 'Auth\HomeController@bookTrip');
Route::get('/login', 'Auth\HomeController@logIn');// solte es nicht eines der Auth von oben sein?


//AdminOverViewC.
Route::get('/admin', 'Auth\AdminOverviewController@getTrips');
Route::get('/admin/newTrip', 'Auth\AdminOverviewController@newTrips');
Route::get('/admin/editTrip/{id}', 'Auth\AdminOverviewController@editTrips');

//AdminTripC.
Route::post('/admin/save', 'Auth\AdminTripController@saveTrip');
Route::post('/admin/printPasanger', 'Auth\AdminOverviewController@printPasangers');
Route::post('/admin/bill', 'Auth\AdminOverviewController@createBill');
Route::post('/admin/cloneTrip/{id}', 'Auth\AdminOverviewController@cloneTrip');

//BookingC.
Route::post('/bookS', 'Auth\BookingController@book');

//HeadC.

