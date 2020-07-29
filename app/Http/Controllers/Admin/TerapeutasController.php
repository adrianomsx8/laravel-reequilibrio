<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TerapeutaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use App\Terapeuta;

class TerapeutasController extends Controller
{
    
    public function list(){
        $terapeutas = Terapeuta::all('id', 'nome','email');
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagen", "url" => ""]
        ]);
        return  view('admin.terapeuta.list' , compact('terapeutas', 'listaMigalhas') );
    }

    public function index()
    {
       return view('admin.terapeuta.index', ['user' => Auth::user()]);
    }

    public function create(TerapeutaRequest $request)
    {
        $data = $request->all(); 
        $data['user_id'] =  Auth::user()->id;
        $request->validated();
        Terapeuta::create($data);
        flash('Registro inserido com sucesso')->success();
        return redirect('/home');
    }

    public function editForm($id)
    {
        $terapeuta = Terapeuta::find($id);
        return view('admin.terapeuta.edit', ['terapeuta' => $terapeuta ]);
    }

    public function edit(TerapeutaRequest $request , $id)
    {
        $terapeuta = Terapeuta::findOrFail($id);
        $terapeuta->update($request->all());
        flash('Registro alterado com sucesso')->success();
        return redirect('/home');
    }

    public function especialidades($id)
    {
        $terapeuta = Terapeuta::find($id);
        return view('admin.terapeuta.especialidades', compact('terapeuta'));
    }

    public function foto($id)
    {
        //print phpinfo();
        return view('admin.terapeuta.foto',  compact('id'));
    }

    public function upload(Request $request, $id)
    {       
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg,',
        ]);

        if ($request->hasFile('foto')) {   
            $path = $request->foto->store('public/images');
            $image_name = substr($path, 14);
            
            $terapeuta = Terapeuta::findOrFail($id);         
            $terapeuta->fotos()->create([
                'foto' =>  $image_name           
            ]);
            flash('foto inserida com sucesso')->success();
            return redirect('/home');
        }
    }
}
