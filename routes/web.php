<?php

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
    return view('welcome');
});


Route::get('/terapeutas','TerapeutasController@terapeutas');
Route::get('/detalhar/{id}','TerapeutasController@detalhar')->name('detalhar');

//Route::get('/terapeutas','TerapeutasController@list');

Route::middleware('auth')->group(function(){

    Route::get('/usuarios','UsersController@index');
    Route::post('/usuarios','UsersController@create');
    Route::get('/usuarios/{id}/delete','UsersController@delete');
    Route::get('/usuarios/{id}/edit','UsersController@editForm');
    Route::post('/usuarios/{id}','UsersController@edit');

    //Route::resource('/usuarios', 'UsersController');

    Route::get('/terapeuta','TerapeutasController@index');
    Route::post('/terapeuta/create','TerapeutasController@create');
    Route::get('/terapeuta/{id}/editForm','TerapeutasController@editForm');
    Route::post('/terapeuta/{id}/edit','TerapeutasController@edit');
    Route::get('/terapeuta/list','TerapeutasController@list');
    Route::get('/terapeuta/{id}/especialidades','TerapeutasController@especialidades');

    Route::get('terapias/', 'TerapiasController@list');
    Route::get('terapias/index', 'TerapiasController@index');
    Route::post('terapias/create', 'TerapiasController@create');
    Route::get('/terapias/{id}/editForm','TerapiasController@editForm');
    Route::post('/terapias/{id}/edit','TerapiasController@edit');
    Route::get('/terapias/{id}/delete','TerapiasController@delete');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
