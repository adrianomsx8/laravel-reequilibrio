<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerapiasRequest;
use App\Terapias;
use App\Especialidades;

class TerapiasController extends Controller
{
    public function index()
    {
      return view('terapias.index');
    }

    public function create(TerapiasRequest $request)
    {
        $data = $request->all();
        $request->validated();
        Terapias::create( $data);
        flash('Registro inserido com sucesso')->success();
        return redirect('/terapias/');

    }
    
    public function list()
    {
        $terapias = Terapias::all();
        return view('terapias.list', ['terapias' => $terapias]);
    }

    public function editForm($id)
    {
        $terapia = Terapias::findOrFail($id);
        return  view('terapias.edit', ['terapia' => $terapia ]);
    }

    public function edit(TerapiasRequest $request, $id)
    {

        $terapia = Terapias::findOrFail($id);
        $terapia->update($request->all());
        flash('Registro alterado com sucesso')->success();
        return redirect('/terapias/');
    }

    public function delete($id)
    {
        $terapia = Terapias::findOrFail($id);
        $terapia->delete();
        flash('Registro excluido com sucesso')->success();
        return redirect('/terapias/');
    }

    public function vincular($id)
    {
       $terapias = Terapias::all();
       return view('terapeuta.vincular',['terapias' => $terapias , 'id'=> $id]);
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
