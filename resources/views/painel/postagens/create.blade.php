@extends('painel.template')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Cad e Edit</div>
					<div class="panel-body">
						
							<form role="form">
							
								<div class="form-group">
									<label>Nome</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Categoria</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Descrição</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Foto</label>
									<input type="file">
									 <p class="help-block">123.</p>
								</div>
								
								<div class="form-group">
									<label>Texto</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>								
							</div>
							
								
								
							
						</form>
					
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


@endsection