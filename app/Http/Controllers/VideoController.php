<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use Illuminate\Http\Request;
class VideoController extends CrudController{
    public function all($entity){
        parent::all($entity); 
       
			$this->filter = \DataFilter::source(new \App\Video);
			$this->filter->add('Nome', 'Nome', 'text');
			$this->filter->submit('Buscar');
			$this->filter->reset('Resetar');
			$this->filter->build();
			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('nome', 'Nome');
			$this->grid->add('url', 'url');
			$this->grid->add('description', 'Descrição');
			$this->addStylesToGrid();
  
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
       
	
			$this->edit = \DataEdit::source(new \App\Video());
			$this->edit->label('Editar Videos');
			$this->edit->add('nome', 'Nome', 'text');
			$this->edit->add('description', 'Descrição', 'text');
			$this->edit->add('url', 'url', 'text');
       
        return $this->returnEditView();
    } 
 
}