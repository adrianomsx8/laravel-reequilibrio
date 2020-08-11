<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerapeutaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Query\Grammars\PostgresGrammar;
use Illuminate\Support\Facades\DB;
use App\Terapeuta;


class TerapeutasController extends Controller
{
    public function terapeutas(Request $request)
    {
        if(isset($request->busca) && $request->busca != ""){
            $busca = $request->busca;
            $terapeutas = DB::table('terapeuta')
            ->join('terapeuta_fotos', 'terapeuta.id', '=', 'terapeuta_fotos.terapeuta_id')
            ->select('terapeuta.id','terapeuta.nome','terapeuta.descricao', 'terapeuta_fotos.foto')
            ->orWhere('nome', 'like', '%'.$busca.'%')
            ->paginate(2);
        }else{
            $busca = "";
             $terapeutas = DB::table('terapeuta')
            ->join('terapeuta_fotos', 'terapeuta.id', '=', 'terapeuta_fotos.terapeuta_id')
            ->select('terapeuta.id','terapeuta.nome','terapeuta.descricao', 'terapeuta_fotos.foto')
            ->paginate(2);
        }

        return view('terapeuta.index', compact('terapeutas', 'busca'));
    }   
}
