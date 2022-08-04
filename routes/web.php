<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('login',[App\Http\Controllers\UserController::class,'viewLogin']);
Route::post('signin', [App\Http\Controllers\UserController::class, 'login']);

Route::get('adminLogin',[App\Http\Controllers\AdminController::class,'index']);
Route::post('adminLogin', [App\Http\Controllers\AdminController::class, 'login']);

Route::get('region',[App\Http\Controllers\RegionController::class,'index']);
Route::post('storeRegion', [App\Http\Controllers\RegionController::class, 'store']);

Route::get('territory',[App\Http\Controllers\TerritoryController::class,'index']);
Route::post('storeTerritory', [App\Http\Controllers\TerritoryController::class, 'store']);

Route::get('user',[App\Http\Controllers\UserController::class,'index']);
Route::post('storeUser', [App\Http\Controllers\UserController::class, 'store']);

Route::get('product',[App\Http\Controllers\ProductController::class,'index']);
Route::post('storeProduct', [App\Http\Controllers\ProductController::class, 'store']);

Route::get('individualPurchase',[App\Http\Controllers\IndividualPurchaceController::class,'index']);
Route::post('storeIndividualPurchase', [App\Http\Controllers\IndividualPurchaceController::class, 'store']);

Route::get('purchaseOrder',[App\Http\Controllers\PurchaceOrderController::class,'index']);

Route::Post('store',[App\Http\Controllers\ZoneController::class,'store']);

Route::view('zone','zone');

Route::view('adminDashboard','admindashboard');
Route::view('userDashboard','userdashboard');


Route::get('/search','PurchaceOrderController@search');
Route::get('/searchRegion','PurchaceOrderController@searchRegion');
Route::get('/searchTerritory','PurchaceOrderController@searchTerritory');


