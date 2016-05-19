<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Programas extends Model implements SluggableInterface{
 	
 	use SluggableTrait;

    protected $table = 'programas';
	
	protected $sluggable = [
        'build_from' => 'nome',
        'save_to'    => 'slug',
    ];

}