<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class MensagemController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Mensagem);
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('Buscar');
			$this->filter->reset('resetar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID');
			$this->grid->add('name', 'Nome');
			$this->grid->add('email', 'Email');
			$this->grid->add('bairro', 'Bairro');
			$this->grid->add('telefone', 'Telefone');
			$this->grid->add('created_at', 'Data');
			$this->grid->add('mensagem', 'Mensagem');
			$this->addStylesToGrid();
        

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\Mensagem());

			$this->edit->label('Editar Mensagem');

			$this->edit->add('name', 'Nome', 'text')->rule('required');
			$this->edit->add('email', 'Email', 'text')->rule('required');
			$this->edit->add('bairro', 'Bairro', 'text')->rule('required');
			$this->edit->add('telefone', 'Telefone', 'text')->rule('required');
			$this->edit->add('mensagem', 'Mensagem', 'redactor')->rule('required');

        return $this->returnEditView();
    } 

    


}
