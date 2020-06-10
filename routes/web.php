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


Route::get('/terapeutas','TerapeutasController@list');

Route::middleware('auth')->group(function(){

    Route::get('/usuarios','UsersController@index');
    Route::post('/usuarios','UsersController@create');
    Route::get('/usuarios/{id}/delete','UsersController@delete');
    Route::get('/usuarios/{id}/edit','UsersController@editForm');
    Route::post('/usuarios/{id}','UsersController@edit');

    //Route::resource('/usuarios', 'UsersController');
    
    Route::any('/hello', function (){
        if(isset($_POST['teste'])){
           return view('hello', ['name' => 'Adriano', 'teste'=> $_POST['teste']]);
        }else{
            return view('hello', ['name' => 'Adriano']);
        }
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
