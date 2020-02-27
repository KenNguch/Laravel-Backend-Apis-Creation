<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Routes for Order Table
Route::post('/orders', 'OrderApiController@create');
Route::get('/orders', 'OrderApiController@show');
Route::get('/order/{id}', 'OrderApiController@showbyid');
Route::put('/orderupdate/{id}', 'OrderApiController@updatebyid');
Route::delete('orderdelete/{id}', 'OrderApiController@deletebyid');


//Routes for Product Table
Route::post('/products', 'ProductApiController@create');
Route::get('/products', 'ProductApiController@show');
Route::get('/product/{id}', 'ProductApiController@showbyid');
Route::put('/productupdate/{id}', 'ProductApiController@updatebyid');
Route::delete('productdelete/{id}', 'ProductApiController@deletebyid');

//Routes for Product Table
Route::post('/suppliers', 'SupplierApiController@create');
Route::get('/suppliers', 'SupplierApiController@show');
Route::get('/supplier/{id}', 'SupplierApiController@showbyid');
Route::put('/supplierupdate/{id}', 'SupplierApiController@updatebyid');
Route::delete('supplierdelete/{id}', 'SupplierApiController@deletebyid');

