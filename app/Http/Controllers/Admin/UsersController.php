<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name','email', 
          \DB::raw("CASE WHEN profile ='A' THEN 'Administrador'
                    WHEN  profile ='C' THEN 'Usuário Comum' 
                    WHEN  profile ='T' THEN 'Terapeuta' 
                    WHEN  profile ='T' THEN 'Paciente' 
                    END AS profile")             
        )->paginate(10);
    
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => ""]
        ]);
        return view('admin.users.index', compact('users','listaMigalhas'));
    }

    public function create()
    {       
     $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => "/admin/usuarios/index"],
            ["titulo" => "Criar", "url" => ""]
        ]);
      return view('admin.users.create',compact('listaMigalhas'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'profile' => ['required']
        ]);

        if($validacao->fails()){
           return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data['password'] =  bcrypt($data['password']);

        User::create($data);
        flash('usuario criado com sucesso')->success();
        return redirect('/admin/usuarios/index');
    }

    public function show($id){
        return User::find($id);
     }

    public function edit($id)
    {
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => "/admin/usuarios/index"],
            ["titulo" => "Editar", "url" => ""]
        ]);
        $user = User::findOrFail($id);
        return  view('admin.users.edit', compact('user', 'listaMigalhas'));
    }

    public function update(Request $request, $id)
    {     
       $data = $request->all();
       if(isset($data['password']) && !is_null($data['password'])){
          $validacao = \Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'password' => ['required', 'string', 'min:8'],
            'profile' => ['required']
         ]);
         $data['password'] =  bcrypt($data['password']);
       }else{
        $validacao = \Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'profile' => ['required']
        ]);
        unset($data['password']);
       }

        if($validacao->fails()){
            flash($validacao->errors())->error();
           return redirect()->back()->withErrors($validacao)->withInput();
        }    

        $user = User::findOrFail($id);   
        $user->update($data);
        flash('usuario atualizado com sucesso')->success();
        return redirect('/admin/usuarios/index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        flash('usuario excluido com sucesso')->success();
        return redirect('/admin/usuarios/index');
    }
}
