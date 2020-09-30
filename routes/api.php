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

Route::namespace('Api')->prefix('terapeutas')->group(function(){
    Route::resource('/', 'TerapeutasController');
    Route::get('/{id}', 'TerapeutasController@show');
    Route::put('/{id}', 'TerapeutasController@update');
    Route::delete('/{id}', 'TerapeutasController@destroy');
});


