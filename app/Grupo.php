<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
   protected $table = 'grupos';

   public function programa()
    {
        return $this->hasMany(Programa::class);
    }
}
