<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class PostsController extends CrudController{

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
			$this->grid->add('resumo', 'Resumo');
			$this->grid->add('foto', 'Foto');
			$this->grid->add('descricao', 'Descrição');
			$this->grid->add('descricao2', 'Descrição 2');

			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
       
        $this->edit = \DataEdit::source(new \App\Posts());

		$this->edit->label('Editar Postagem');

			$this->edit->add('nome', 'Nome', 'text');
			$this->edit->add('categoria','Categoria','select')->options(\App\Categoria::lists("name", "id")->all());
			$this->edit->add('resumo', 'Resumo', 'text')->rule('required'); 
			$this->edit->add('foto', 'Foto', 'image')->move('img/upload/');
			$this->edit->add('descricao', 'Descrição', 'redactor')->rule('required');
			$this->edit->add('descricao2', 'Descrição 2', 'redactor')->rule('required');
       
        return $this->returnEditView();
    }    
}
