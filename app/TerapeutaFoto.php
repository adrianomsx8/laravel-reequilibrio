<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerapeutaFoto extends Model
{
    protected $table = 'terapeuta_fotos';

    protected $fillable = [
        'foto'
    ];
   public function terapeuta ()
   {
       return $this->belongsTo(terapeuta::class);
   }
}
