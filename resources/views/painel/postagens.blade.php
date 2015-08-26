@extends('painel.template')

@section('content')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">{{$titulo or 'Categoria'}}</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div>
				

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">{{$titulo or 'Categoria'}} </div>
					<div class="panel-body">

			

						<table class="table table-hover">
							<thead>
								<th>#</th>
								<th>Nome</th>
								<th>Email</th>
								<th>Criação</th>
								<th>Modificação</th>
								<th>Ações</th>
								
							</thead>
							@forelse ($users as $users)
							<tr>
								<td>{{$users->id}}</td>
								<td>{{$users->name}}</td>
								<td>{{$users->email}}</td>
								<td>{{$users->created_at}}</td>
								<td>{{$users->updated_at}}</td>
								<td>editar | deletar</td>
							</tr>	
								@empty
								 	<p>Nenhuma postagem</p>
								@endforelse 
							
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
			
				
@endsection
