<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terapias extends Model
{
    protected $table = 'terapias';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'terapia', 'foto', 'descricao'
    ];

    public function terapeutas ()
    {
        return $this->belongsToMany('App\Terapeuta', 'terapeuta_especialidades', 'terapeuta_id', 'terapia_id');
    }
}
