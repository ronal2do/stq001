<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use Hash;
use Illuminate\Http\Request;

class UsersController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Users);
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('buscar');
			$this->filter->reset('resetar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Nome');
			$this->grid->add('email', 'Email');
			$this->grid->add('created_at', 'Criado em:'); 

		
			$this->addStylesToGrid();
    
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        	\App\Users::creating(function($data) {
		        $data->password = Hash::make(\Request::input('password'));
		    });       
	
			$this->edit = \DataEdit::source(new \App\Users());

			$this->edit->label('Editar redatores');

			$this->edit->add('name', 'Nome', 'text');
			$this->edit->add('email', 'Email', 'text');
			$this->edit->add('password', 'Senha', 'text')->rule('required');
		
        return $this->returnEditView();
    }    
}
