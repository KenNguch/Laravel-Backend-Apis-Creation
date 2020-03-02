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
//*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Routes For The Passport Authentication
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'AuthController@details');


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

//Routes for Supplier Table
    Route::post('/suppliers', 'SupplierApiController@create');
    Route::get('/suppliers', 'SupplierApiController@show');
    Route::get('/supplier/{id}', 'SupplierApiController@showbyid');
    Route::put('/supplierupdate/{id}', 'SupplierApiController@updatebyid');
    Route::delete('supplierdelete/{id}', 'SupplierApiController@deletebyid');

//Routes for Order Details Table
    Route::post('/orderdetails', 'OrderDetailsApiController@create');
    Route::get('/orderdetails', 'OrderDetailsApiController@show');
    Route::get('/orderdetail/{id}', 'OrderDetailsApiController@showbyid');
    Route::put('/orderdetailsrupdate/{id}', 'OrderDetailsApiController@updatebyid');
    Route::delete('orderdetaildelete/{id}', 'OrderDetailsApiController@deletebyid');

//Routes for Supplier Products Table
    Route::post('/suppliersproducts', 'SupplierProductApiController@create');
    Route::get('/suppliersproducts', 'SupplierProductApiController@show');
    Route::get('/suppliersproducts/{id}', 'SupplierProductApiController@showbyid');
    Route::put('/suppliersproductupdate/{id}', 'SupplierProductApiController@updatebyid');
    Route::delete('suppliersproductsdelete/{id}', 'SupplierProductApiController@deletebyid');
});
