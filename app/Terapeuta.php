<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapeuta extends Model
{
    protected $table = 'terapeuta';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'telefone', 'email', 'foto', 'especialidade', 'descricao', 'cidade', 'estado', 'endereco', 'formacao'
    ];

}
