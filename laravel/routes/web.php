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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create-address', 'AddressController@createAddress');
Route::post('/retrieve-address', 'AddressController@retrieveAddress');
Route::post('/retrieve-addresses', 'AddressController@retrieveAddresses');

Route::post('/create-parcel', 'ParcelController@createParcel');
Route::post('/retrieve-parcel', 'ParcelController@retrieveParcel');
Route::post('/retrieve-parcels', 'ParcelController@retrieveParcels');

Route::post('/create-shipment', 'ShipmentController@createShipment');
Route::post('/retrieve-shipment', 'ShipmentController@retrieveShipment');
Route::post('/retrieve-shipments', 'ShipmentController@retrieveShipments');

Route::post('/create-tracking', 'TrackingController@createTracking');
Route::post('/retrieve-tracking', 'TrackingController@retrieveTracking');
Route::post('/retrieve-trackingers', 'TrackingController@retrieveTrackingers');

Route::post('/create-insurance', 'InsuranceController@createInsurance');
Route::post('/retrieve-insurance', 'InsuranceController@retrieveInsurance');
Route::post('/retrieve-insurances', 'InsuranceController@retrieveInsurances');