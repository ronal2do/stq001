<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Categoria extends Model implements SluggableInterface{
 	
 	use SluggableTrait;

    protected $table = 'categoria';

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }

}
