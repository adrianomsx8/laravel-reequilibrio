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
    public function terapeutas()
    {
        //$terapeutas = Terapeuta::select('id', 'nome','email', 'descricao')->paginate(10);
        //$terapeutas = Terapeuta::select('id', 'nome','email', 'descricao')->paginate(10);
        $terapeutas = DB::table('terapeuta')
            ->join('terapeuta_fotos', 'terapeuta.id', '=', 'terapeuta_fotos.terapeuta_id')
            ->select('terapeuta.*', 'terapeuta_fotos.*')
            ->paginate(2);

        return view('terapeuta.index', compact('terapeutas'));
    }
    
    public function detalhar(terapeuta $id)
    {
        die('teste');
        return view ('terapeuta.detalhar', ['terapeuta' => $id]);
    }

    public function detalhe(terapeuta $id){
        return view ('terapeuta.detalhar', ['terapeuta' => $id]);
    }
    
}
