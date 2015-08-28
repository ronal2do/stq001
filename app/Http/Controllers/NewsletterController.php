<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class NewsletterController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        
			$this->filter = \DataFilter::source(new \App\Newsletter);
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('Buscar');
			$this->filter->reset('resetar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Nome');
			$this->grid->add('email', 'Email');
			$this->grid->add('bairro', 'Bairro');
			
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');  created_at
		
			$this->edit->add('code', 'Code', 'text')->rule('required');


        */
       
        return $this->returnEditView();
    }    
}
