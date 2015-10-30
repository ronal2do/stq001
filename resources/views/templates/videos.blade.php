@extends('templates.template')

@section('content')										
<section class="sect-hero center-all purple" style="background-color: #88c8d3;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 style="color:#000;"> Videos</h1>
			</div>
	</div>
</div>
</section>
<div class="row">
	<div class="g-8 offset2 cols">
		<h2>Photography</h2>
		<p>We directed a photo shoot at Watson’s HQ to ensure the site’s hero and banner regions showcased the products in a stunning and visually enticing way.</p>
	</div></div>
</section>
<div class="img-grid has-sep">
  @forelse ($videos as $video) 
  <a href="">
  	<img class="left" src="http://urbaninfluence.com/images/work/watson/watson-half1.min.jpg" alt="{{$video->nome}}">
  	<div class="imagem-mascara"></div>
  </a>
		

  @empty
	 	<p>Nenhuma postagem</p>
  @endforelse 
</div>

@include('contato.news') 


@endsection
