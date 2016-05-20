<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatProgramas extends Model
{
   protected $table = 'catprograma';

   public function programa()
    {
        return $this->hasMany(Programa::class);
    }
}
