<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class VidCategoriaController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\VidCategoria);
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('buscar');
			$this->filter->reset('resetar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID');
			$this->grid->add('name', 'Nome');
			$this->grid->add('description', 'Descrição');
			
			$this->addStylesToGrid();

  
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
			$this->edit = \DataEdit::source(new \App\VidCategoria());
			$this->edit->label('Edit Category');
			$this->edit->add('name', 'Nome', 'text');
       return $this->returnEditView();
    }    
}
