@extends('templates.template')

@section('content')	
									
<section class="sect-hero center-all purple" style="background-color: #88c8d3;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1>Vídeos</h1>
			</div>
	</div>
</div>
</section>
<div class="culture center-all">
        <section id="realizacoes" class="sect-work sect-peeps bg-white" >      
            @forelse ($videos as $video)
            <div class="peep-wrapd">
                <div class="row">
                    <div class="g-6 cols"><br>
                        <iframe width="480" height="260" src="https://www.youtube.com/embed/{{$video->url}}?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="g-6 cols">
                        <span><br><br>
                        <h1 style="font-size:3rem;">{{$video->nome}}</h1>
                            <p>{{$video->description}}</p>            
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
