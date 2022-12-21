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


Route::group([

    'middleware' => 'api'

], function ($router) {

Route::get('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@index');
Route::get('/clasificacion/{id}', 'App\Http\Controllers\ClasificacionesController@show');
Route::post('/clasificaciones', 'App\Http\Controllers\ClasificacionesController@store');
Route::put('/clasificacion/{id}', 'App\Http\Controllers\ClasificacionesController@update');
Route::delete('/clasificacion/{id}', 'App\Http\Controllers\ClasificacionesController@destroy');

Route::get('/roles', 'App\Http\Controllers\RolController@index');
Route::get('/rol/{id}', 'App\Http\Controllers\RolController@show');
Route::post('/roles', 'App\Http\Controllers\RolController@store');
Route::put('/rol/{id}', 'App\Http\Controllers\RolController@update');
Route::delete('/rol/{id}', 'App\Http\Controllers\RolController@destroy');

Route::get('/rolesUsers', 'App\Http\Controllers\RolUserController@index');
Route::get('/rolesUser/{id}', 'App\Http\Controllers\RolUserController@show');
Route::post('/rolesUsers', 'App\Http\Controllers\RolUserController@store');
Route::put('/rolesUser/{id}', 'App\Http\Controllers\RolUserController@update');
Route::delete('/rolesUser/{id}', 'App\Http\Controllers\RolUserController@destroy');

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@show');
Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy');

Route::get('/solicitudes', 'App\Http\Controllers\SolicitudController@index');
Route::get('/solicitud/{id}', 'App\Http\Controllers\SolicitudController@show');
Route::post('/solicitudes', 'App\Http\Controllers\SolicitudController@store');
Route::put('/solicitud/{id}', 'App\Http\Controllers\SolicitudController@update');
Route::delete('/solicitud/{id}', 'App\Http\Controllers\SolicitudController@destroy');

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

    

});