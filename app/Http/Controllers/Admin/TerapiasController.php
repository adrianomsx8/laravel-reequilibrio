<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TerapiasRequest;
use App\Terapias;
use App\Especialidades;

class TerapiasController extends Controller
{

    public function index()
    {
        $terapias = Terapias::select('id', 'terapia','descricao')->paginate(10);
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => ""]
        ]);
        return view('admin.terapias.index', compact('terapias','listaMigalhas'));
    }

    public function create()
    {    
      $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Listagem", "url" => '/admin/terapias/index'],
            ["titulo" => "Criar", "url" => ""]
        ]);
      return view('admin.terapias.create', compact('listaMigalhas'));
    }

    public function store(TerapiasRequest $request)
    {
        $data = $request->all();
        $request->validated();
        Terapias::create( $data);
        flash('Registro inserido com sucesso')->success();
        return redirect('/admin/terapias/index');
    }

    public function show($id){
        return Terapias::find($id);
     }

     public function edit($id)
     {
         $listaMigalhas = json_encode([
             ["titulo" => "Home", "url" => route('home')],
             ["titulo" => "Listagem", "url" => '/admin/terapias/index'],
             ["titulo" => "Editar", "url" => ""]
         ]);
         $terapia = Terapias::findOrFail($id);
         return  view('admin.terapias.edit', compact('terapia', 'listaMigalhas'));
     }

     
    public function update(TerapiasRequest $request, $id)
    {
        $terapia = Terapias::findOrFail($id);
        $terapia->update($request->all());
        flash('Registro alterado com sucesso')->success();
        return redirect('/admin/terapias/index');
    }

    
    public function destroy($id)
    {
        $terapia = Terapias::findOrFail($id);
        $terapia->delete();
        flash('Registro excluido com sucesso')->success();
        return redirect('/admin/terapias/index');
    }

    public function vincular($id)
    {
       $terapias = Terapias::all();
       return view('admin.terapeuta.vincular',['terapias' => $terapias , 'id'=> $id]);
    }

    public function vincularSave(Request $request, $id)
    {
       $terapias = $request->all()['terapia'];
       $data = date('Y-m-d h:i:s');

       foreach($terapias as $t){
         Especialidades::create([
             'terapeuta_id' => $id,
             'terapia_id' => $t
            ]
         );
       }
       flash('Vinculo criado com sucesso')->success();
       return redirect('/home/');
    }
}
