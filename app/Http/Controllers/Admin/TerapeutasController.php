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
    
    public function index(){
        $terapeutas = Terapeuta::select('id', 'nome','email')->paginate(2);
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => ""]
        ]);
        return  view('admin.terapeuta.index' , compact('terapeutas', 'listaMigalhas') );
    }

    public function create()
    { 
      $user =   Auth::user();
      return view('admin.terapeuta.create', compact('user'));
    }
   
    public function store(TerapeutaRequest $request)
    {
        $data = $request->all(); 
        $data['user_id'] =  Auth::user()->id;
        $request->validated();
        Terapeuta::create($data);
        flash('Registro inserido com sucesso')->success();
        return redirect('/home');
    }

    public function show($id){
        return Terapeuta::find($id);
     }

    public function edit($id)
    {
        $terapeuta = Terapeuta::find($id);
        return view('admin.terapeuta.edit', compact('terapeuta'));
    }

    public function update(TerapeutaRequest $request , $id)
    {
        $terapeuta = Terapeuta::findOrFail($id);
        $terapeuta->update($request->all());
        flash('Registro alterado com sucesso')->success();
        return redirect('/home');
    }

    public function destroy($id)
    {
        $terapia = Terapeuta::findOrFail($id);
        $terapia->delete();
        flash('Registro excluido com sucesso')->success();
        return redirect('/home');
    }


    public function especialidades($id)
    {
        $terapeuta = Terapeuta::find($id);
        return view('admin.terapeuta.especialidades', compact('terapeuta'));
    }

    public function foto($id)
    {
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
