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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/IranFood', 'App\Http\Controllers\IranianCountry@CreateFamousFood');
Route::get('/IranClimate', 'App\Http\Controllers\IranianCountry@CreateClimate');

Route::get('/IndiaFood', 'App\Http\Controllers\IndianCountry@CreateFamousFood');
Route::get('/IndiaClimate', 'App\Http\Controllers\IndianCountry@CreateClimate');
