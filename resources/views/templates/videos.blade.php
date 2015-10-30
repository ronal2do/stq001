@extends('templates.template')

@section('content')										
<section class="sect-hero center-all purple" style="background-color: #88c8d3;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 > Vídeos</h1>
			</div>
	</div>
</div>
</section>
<div class="row">
	<div class="g-8 offset2 cols">
		
		</div></div>
</section>
<div class="img-grid has-sep">
  @forelse ($videos as $video) 
  <a href="/video/{{$video->id}}">
  	<img class="left" src="http://img.youtube.com/vi/{{$video->url}}/0.jpg" alt="{{$video->nome}}">
  </a>
		

  @empty
	 	<p>Nenhuma postagem</p>
  @endforelse 
</div>

@include('contato.news') 


@endsection
