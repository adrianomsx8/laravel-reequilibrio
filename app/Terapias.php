<?php

namespace App;

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
}
