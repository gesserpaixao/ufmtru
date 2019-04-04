<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model


{

   public $fillable = ['data','cafe','almoco','jantar','almoco_vegetariano','jantar_vegetariano'];

   public function showcardapio()// add por @tiago para mostrar cardapio
   {
      return $this->hasMany(items::class);

    }

    
}
   