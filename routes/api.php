<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers\Galaxy', 'prefix' => 'galaxy'], function () {
    Route::get('/','IndexController');
    Route::get('/delete/{url}','DeleteController');
    Route::post('/create','StoreController');
    Route::patch('/{url}','UpdateController');
});
Route::group(['namespace' => 'App\Http\Controllers\SolarSystem', 'prefix' => 'solar_system'], function () {
    Route::get('/{url}','IndexController');
    Route::get('/delete/{url}','DeleteController');
    Route::post('/generate','GenerateController');
});
