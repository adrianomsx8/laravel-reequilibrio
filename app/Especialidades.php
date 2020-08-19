<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Especialidades extends Pivot
{
    protected $table = 'terapeuta_especialidades';

    public $timestamps = false;
    
    protected $fillable = ['terapeuta_id', 'terapia_id'];

   public function terapeuta()
   {
       return $this->belongsToMany(Terapeuta::class);
   }

   public static function consultar($id){
    return Especialidades::where('terapeuta_id' , '=', $id);
   }
   public static function deleteifExists($id){
    $especialidade = Especialidades::where('terapeuta_id' , '=', $id);
    if($especialidade->count() > 0){
        $especialidade->delete();
    }
   }
}
