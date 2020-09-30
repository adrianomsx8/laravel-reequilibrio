<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TerapeutaRequest;

class TerapeutasController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $terapeutas;
    
   public function __construct(\App\Terapeuta $terapeutas)
   {
       $this->terapeutas = $terapeutas;
   }

   public function index()
   {
       $terapeutas = $this->terapeutas->all();
       return $terapeutas;
   }

    public function show($id){
      $terapeuta =  $this->terapeutas->find($id);
      return response()->json($terapeuta);
    }

    public function store(Request $request)
    {
        $data = $request->all(); 
        $terapeutas = $this->terapeutas->create($data);
        return response()->json($terapeutas);
    }

    public function update(Request $request , $id)
    {
        $terapeuta =  $this->terapeutas->findOrFail($id);
        $terapeuta->update($request->all());
        return response()->json($terapeuta);
    }

    public function destroy($id)
    {
        $terapeuta = $this->terapeutas->findOrFail($id);
        $terapeuta->delete();
        return response()->json(['data' => ['msg' => 'Terapeuta removido com sucesso']]);
    }
}
