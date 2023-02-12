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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/create-product', 'PorductController@createData');
Route::get('/get-all-product', 'PorductController@getAllData');
Route::get('/get-product/{id}', 'PorductController@getData');
Route::get('/search-product', 'PorductController@searchData');
Route::patch('/update-product/{id}', 'PorductController@updateData');
Route::delete('/delete-product/{id}', 'PorductController@deleteData');