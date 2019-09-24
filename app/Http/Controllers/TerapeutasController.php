<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Terapeuta;

class TerapeutasController extends Controller
{
    public function list(){
        $terapeutas = Terapeuta::all();
        return  $terapeutas;
    }
}
