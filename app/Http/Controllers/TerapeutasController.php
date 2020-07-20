<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerapeutaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Terapeuta;

class TerapeutasController extends Controller
{
    public function list(){
        $terapeutas = Terapeuta::all();
        return  view('terapeuta.list' , ['terapeutas' =>   $terapeutas]);
    }

    public function index()
    {
       return view('terapeuta.index', ['user' => Auth::user()]);
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
        return view('terapeuta.edit', ['terapeuta' => $terapeuta ]);
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
        return view('terapeuta.especialidades', ['terapeuta' => $terapeuta ]);
    }

    
}
