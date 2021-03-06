<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Terapeuta;
use App\Models\User;
use App\Models\Terapias;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $terapeuta = Terapeuta::where('user_id', $user_id )->first();
        $total_terapeutas = Terapeuta::all()->count();
        $total_usuarios = User::all()->count();
        $total_terapias = Terapias::all()->count();
      
        $terapeuta_id = !is_null($terapeuta) ?  $terapeuta->id : '';

        return view('home' , compact('terapeuta_id', 'total_terapeutas', 'total_usuarios', 'total_terapias'));
    }
}
