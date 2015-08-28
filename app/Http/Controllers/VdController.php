<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class VdController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Posts);
			$this->filter->add('nome', 'Nome', 'text');
			$this->filter->add('categoria', 'Categoria', 'text');
			$this->filter->submit('Buscar');
			$this->filter->reset('resetar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID', 'id');
			$this->grid->add('nome', 'Nome');
			$this->grid->add('categoria', 'Categoria');
			$this->grid->add('url', 'Url');
			$this->grid->add('foto', 'Foto');

			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
       
        $this->edit = \DataEdit::source(new \App\Posts());

		$this->edit->label('Editar Postagem');

			$this->edit->add('nome', 'Nome', 'text');
			$this->edit->add('vid_categoria','Categoria','select')->options(\App\VidCategoria::lists("name", "id")->all());
			$this->edit->add('url', 'Url', 'text')->rule('required'); 
			$this->edit->add('foto', 'Foto', 'image')->move('img/upload/');


       
        return $this->returnEditView();
    }    
}
