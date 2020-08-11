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

use App\Terapeuta;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/terapeutas','TerapeutasController@terapeutas');
//Route::get('/terapeuta/detalhar/{id}','TerapeutasController@detalhar')->name('detalhar');
//Route::get('/terapeutas','TerapeutasController@list');
//Route::get('/terapeuta/{id}/detalhar/','TerapeutasController@detalhar');

Route::get('/terapeuta/detalhar/{id}', function($id){
    $terapeuta = Terapeuta::find($id);
    return view ('terapeuta.detalhar', compact('terapeuta'));
})->name('detalhar');

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){

    /***** USUÁRIOS  */
    Route::get('/usuarios','UsersController@index');
    Route::post('/usuarios','UsersController@create');
    Route::get('/usuarios/{id}/delete','UsersController@delete');
    Route::get('/usuarios/{id}/edit','UsersController@editForm');
    Route::post('/usuarios/{id}','UsersController@edit');
    //Route::resource('/usuarios', 'UsersController');

    /** TERAPEUTAS */
    Route::get('/terapeuta','TerapeutasController@index');
    Route::post('/terapeuta/create','TerapeutasController@create');
    Route::get('/terapeuta/{id}/editForm','TerapeutasController@editForm');
    Route::post('/terapeuta/{id}/edit','TerapeutasController@edit');
    Route::get('/terapeuta/list','TerapeutasController@list')->middleware('can:eUsuario');
    Route::get('/terapeuta/{id}/especialidades','TerapeutasController@especialidades');
    Route::get('/terapeuta/{id}/foto','TerapeutasController@foto');
    Route::post('/terapeuta/{id}/upload','TerapeutasController@upload')->name('terapeuta.upload');
    Route::get('terapeuta/{id}/vincular', 'TerapiasController@vincular')->name('terapeuta.vincular');
    Route::post('terapeuta/{id}/vincularSave', 'TerapiasController@vincularSave')->name('terapeuta.vincularSave');
    Route::get('/terapeuta/show/{id}','TerapeutasController@show');
    Route::put('/terapeuta/editar/{id}','TerapeutasController@editar');
    Route::delete('/terapeuta/deletar/{id}','TerapeutasController@deletar');

    /***** TERAPIAS  */
    Route::get('terapias/', 'TerapiasController@list');
    Route::get('terapias/index', 'TerapiasController@index');
    Route::post('terapias/create', 'TerapiasController@create');
    Route::get('/terapias/{id}/editForm','TerapiasController@editForm');
    Route::post('/terapias/{id}/edit','TerapiasController@edit');
    Route::get('/terapias/{id}/delete','TerapiasController@delete');

    //Route::resource('Terapeutas', 'TerapeutasController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
