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

/*
 *
 */
Auth::routes();

Route::get('/', ['as' => '/home', 'uses' => 'HomeController@index']);

/*
 * Order Route
 */
Route::group(['middleware' => 'auth'], function () {
    Route::resource('order', 'OrderController');
});

// API
Route::get('/order/getOrderList',array('as' => 'order.getOrderList', 'uses' => 'OrderController@getOrderList'));
Route::get('/order/getOrderDetail',array('as' => 'order.getOrderDetail', 'uses' => 'OrderController@getOrderDetail'));

/*
 * Parcel Route
 */
Route::group(['middleware' => 'auth'], function () {
    Route::resource('parcel', 'ParcelController');
});

// API
Route::get('/parcel/getOrderParcel',array('as' => 'parcel.getOrderParcel', 'uses' => 'ParcelController@getOrderParcel'));
Route::get('/parcel/getParcelList',array('as' => 'parcel.getParcelList', 'uses' => 'ParcelController@getParcelList'));
Route::get('/parcel/reRangeParcel',array('as' => 'parcel.reRangeParcel', 'uses' => 'ParcelController@reRangeParcel'));

/*
 * Item Route
 */
Route::group(['middleware' => 'auth'], function () {
    Route::resource('item', 'ItemController');
});

