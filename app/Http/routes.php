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

/*Route::get('/adminOverview', function() {
    return view('adminOverview');
});
*/
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
Route::get('/auth/login', 'Auth\AuthController@getLogin'); //läuft
Route::post('/auth/login', 'Auth\AuthController@postLogin'); //läuft
Route::get('/auth/logout', 'Auth\AuthController@getLogout'); //läuft

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

//HomeC.
//CK: Verzeichnis geändert
Route::get('/', 'HomeController@getTrips');
Route::get('/book/{id}', 'HomeController@bookTrip');
Route::get('/login', 'HomeController@logIn');// solte es nicht eines der Auth von oben sein?


//AdminOverViewC.
//CK: Verzeichnis geändert
Route::get('/adminOverview', 'AdminOverviewController@getAdminTrips');




//AdminTripC.
//CK: Verzeichnis geändert
Route::get('/admin/newTrip', 'AdminTripController@newTrip'); //läuft
Route::post('/admin/save/{id}', 'AdminTripController@saveTrip'); //läuft
Route::post('/admin/printPasanger', 'AdminTripController@printPasangers');
Route::post('/admin/bill/{id}', 'AdminTripController@createBill'); //läuft
Route::get('/admin/deleteBill/{id}/{billID}', 'AdminTripController@deleteBill'); //läuft   
Route::post('/admin/cloneTrip', 'AdminTripController@cloneTrip'); 
Route::get('/admin/deleteTrip/{id}/{tripID}', 'AdminTripController@deleteTrip'); //läuft
Route::get('/admin/editTrip/{id}', 'AdminTripController@editTrips'); //läuft

//BookingC.
//CK: Verzeichnis geändert
Route::post('/books', 'BookingController@book');
Route::post('/deleteBooks/{id}', 'BookingController@deleteBooking');

//HeadC.

