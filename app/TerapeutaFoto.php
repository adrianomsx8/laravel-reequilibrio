<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class TerapeutaFoto extends Model
{
    protected $table = 'terapeuta_fotos';

    protected $fillable = [
        'terapeuta_id', 'foto'
    ];
   public function terapeuta ()
   {
       return $this->belongsTo(terapeuta::class);
   }

   public static function deleteifExists(int $id){
    $foto = TerapeutaFoto::where('terapeuta_id' , '=', $id);
    if($foto->count() > 0){
      $foto_name = $foto->get()->first();
      Storage::delete($foto_name->foto);
      $foto->delete();
    }
   }
}
