<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Posts extends Model implements SluggableInterface{
 	
 	use SluggableTrait;

    protected $table = 'posts';
	
    protected $fillable = [
        'nome', 
        'tipo', 
        'slug', 
        'foto', 
        'resumo', 
        'categoria_id', 
        'grupo_id', 
        'classe', 
        'link' 
    ];

    protected $sluggable = [
        'build_from' => 'nome',
        'save_to'    => 'slug',
    ];
  	

    public function setVehicleIdAttribute($value) {
        $this->attributes['categoria_id'] = $value ?: 7;
    }

    public function setDriverIdAttribute($value) {
        $this->attributes['grupo_id'] = $value ?: 1;
    }

  	public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }
    public function grupo()
    {
      return $this->belongsTo(Grupo::class);
    }

}
