<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class GrupoController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Grupo);
			$this->filter->add('nome', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('nome', 'Name');
			$this->addStylesToGrid();
 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

 
			$this->edit = \DataEdit::source(new \App\Grupo());

			$this->edit->label('Edit Category');

			$this->edit->add('nome', 'Name', 'text');

        return $this->returnEditView();
    }    
}
