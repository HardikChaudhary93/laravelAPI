<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;

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

Route::post('/login', [UserController::class, 'login']);
Route::post('/register',[UserController::class, 'register']);

Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->name('customer.index');
Route::post('/customer', 'App\Http\Controllers\CustomerController@store')->name('customer.store');
Route::get('/customer/{customer}', 'App\Http\Controllers\CustomerController@show')->name('customer.show');
Route::put('/customer/{customer}', 'App\Http\Controllers\CustomerController@update')->name('customer.update');
Route::delete('/customer/{customer}', 'App\Http\Controllers\CustomerController@destroy')->name('customer.destroy');


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

