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
<div class="culture center-all">
        <section id="realizacoes" class="sect-work sect-peeps bg-white" >      
            @forelse ($videos as $video)
            <div class="peep-wrapd">
                <div class="row">
                    <div class="g-6 cols">
                        <iframe width="480" height="260" src="https://www.youtube.com/embed/{{$video->url}}?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="g-6 cols">
                        <span class="peep-name">
                            <h4>{{$video->nome}}</h4>
                            
                                                    
                        </span>
                        <span class="peep-bio">
                            <h4>Link para ver no</h4>
                            <hr class="sep-thin">
                            <p>Youtube</p>
                        </span>
                    </div>
                </div>
            </div>   
            @empty
        <p>Nenhumvideo</p>
    @endforelse 
            </section> 
</div>

@include('contato.news') 


@endsection
