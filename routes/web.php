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
use Illuminate\Http\Resquest;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/terapeutas','TerapeutasController@terapeutas')->name('terapeutas');
//Route::get('/terapeuta/detalhar/{id}','TerapeutasController@detalhar')->name('detalhar');
//Route::get('/terapeutas','TerapeutasController@list');
//Route::get('/terapeuta/{id}/detalhar/','TerapeutasController@detalhar');

Route::get('/terapeuta/detalhar/{id}', function($id){
    $terapeuta = Terapeuta::find($id);
    return view ('terapeuta.detalhar', compact('terapeuta'));
})->name('detalhar');

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){

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
    Route::get('terapias/index', 'TerapiasController@index');
    Route::get('terapias/create', 'TerapiasController@create');
    Route::post('terapias/store', 'TerapiasController@store');
    Route::get('/terapias/show/{id}','TerapiasController@show');
    Route::get('/terapias/edit/{id}','TerapiasController@edit');
    Route::put('/terapias/{id}/update','TerapiasController@update');
    Route::delete('/terapias/destroy/{id}','TerapiasController@destroy');

    /***** USUÁRIOS  */
    Route::get('/usuarios/index','UsersController@index');
    Route::get('usuarios/create', 'UsersController@create');
    Route::post('usuarios/store', 'UsersController@store');
    Route::get('/usuarios/show/{id}','UsersController@show');
    Route::get('/usuarios/edit/{id}','UsersController@edit');
    Route::put('/usuarios/{id}/update','UsersController@update');
    Route::delete('/usuarios/destroy/{id}','UsersController@destroy');

   /* Route::resources([
        'terapias' => 'TerapiasController',
        'usuarios' => 'UsersController',
    ]);*/

    //Route::resource('Terapeutas', 'TerapeutasController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
