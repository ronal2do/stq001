<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model {

    protected $guarded = ['id'];

    protected $table = 'mensagem';

}
