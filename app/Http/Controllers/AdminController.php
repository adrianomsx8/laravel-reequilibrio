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


class AdminController extends Controller
{
    public function index()
    {
        $listaMigalhas = json_encode([
            ["titulo" => "Admin", "url" =>route['admin']],
            ["titulo" => "Lista de Admin", "url" => ""]
        ]);

        $listaModelo = User::select('id','nome', 'email')->where('admin', '=', 'S')->paginate(5);

        return view('admin.adm.index', compact('listaMigalhas', 'listaModelo'));
    }
    
    public function store(Request $request)
    {
       $data = $request->all();
       $validacao = \Validator::make($data,[
           'name' => 'required|string|max:255',
           'email' => 'required|string'
       ]);
    }
}
