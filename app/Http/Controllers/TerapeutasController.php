<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerapeutaRequest;
use App\Http\Controllers\Controller;

use App\Terapeuta;

class TerapeutasController extends Controller
{
    public function list(){
        $terapeutas = Terapeuta::all();
        return  $terapeutas;
    }

    public function index()
    {
       return view('terapeuta.index');
    }

    public function create(TerapeutaRequest $request)
    {
        $data = $request->all();
        $request->validated();
        Terapeuta::create($data);
        flash('Registro inserido com sucesso')->success();
        return redirect('/home');
    }
}
