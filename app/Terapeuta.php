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
        'nome', 'telefone', 'email', 'foto', 'especialidade', 'descricao', 'cidade', 'estado', 'endereco', 'formacao', 'user_id'
    ];

    public function especialidades()
    {
        return $this->belongsToMany('App\Terapias', 'terapeuta_especialidades', 'terapeuta_id', 'terapia_id');
    }

    public function fotos()
    {
        return $this->hasMany(TerapeutaFoto::class);
    }

}
