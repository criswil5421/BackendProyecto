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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@index');
Route::post('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@store');
Route::put('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@update');
Route::delete('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@destroy');