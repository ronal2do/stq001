<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model {

	protected $guarded = ['id'];
    protected $table = 'Newsletter';

}
