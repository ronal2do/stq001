@extends('templates.template')

@section('content')
 
<section class="sect-hero center-all" style="background-color: {{$cor}};"  >
    <div class="row g-full" >
        <header >
            <h1 class="intro-title dk">Postagens </h1>
            <hr class="sep">
            
        </header>
    </div>
</section>
<section class="sect-posts cf bg-lightgrey xl">
            <div class="row center-all">
          
                        <style type="text/css">
						.tg  {border-collapse:collapse;border-spacing:0;}
						.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
						.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
						.tg .tg-e3zv{font-weight:bold}
						</style>
						<table class="tg">
						  <tr>
						    <th class="tg-e3zv">Nome do vídeo</th>
						    <th class="tg-e3zv">link</th>
						    <th class="tg-e3zv">Categoria</th>
						    <th class="tg-e3zv">foto</th>
						    <th class="tg-e3zv">#</th>
						  </tr>
						   @forelse ($post as $post)  
						  <tr>
						    <td class="tg-031e">{{$post->nome}}</td>
						    <td class="tg-031e">{{$post->categoria}}</td>
						    <td class="tg-031e">{{$post->resumo}}</td>
						    <td class="tg-031e">{{$post->foto}}</td>
						    <td class="tg-031e"><a href="postagem/{{$post->id}}/editar"><i class="fa fa-pencil-square-o"> </i></a> | <a href="postagem/{{$post->id}}/deletar"><i class="fa fa-trash-o"></i></a></td>
						  </tr>
						  @empty
				             <p>Nenhuma postagem</p>
				            @endforelse  
						</table>
		        
            </div>
        </section>
@endsection