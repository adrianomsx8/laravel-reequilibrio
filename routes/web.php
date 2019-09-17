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


Route::get('/terapeutas', function (){
    $terapeutas = App\Terapeuta::all();
    return  $terapeutas;
});

Route::middleware('auth')->group(function(){

    Route::get('/usuarios', function (){
        $users = App\User::all();
        return view('users.list', ['users' => $users]);
    });

    Route::post('/usuarios', function (){
       $data = request()->all();

      /* $user = new App\User;
       $user->name = $data['name'];
       $user->email = $data['email'];
       $user->password = $data['password'];
       $user->save();
      // dd($data);*/

      App\User::create(request()->all());

      return redirect('/usuarios');
    });

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
