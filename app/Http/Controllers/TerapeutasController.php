<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerapeutaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use App\Terapeuta;


class TerapeutasController extends Controller
{
    public function terapeutas()
    {
        $terapeutas = Terapeuta::paginate(10);
        return view('terapeuta.index', compact('terapeutas'));
    }
    
    public function detalhar(terapeuta $id)
    {
        return view ('terapeuta.detalhar', ['terapeuta' => $id]);
    }

    
}
