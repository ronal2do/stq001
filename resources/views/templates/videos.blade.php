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
                    <div class="g-6 cols"><br><br>
                        <iframe width="480" height="260" src="https://www.youtube.com/embed/{{$video->url}}?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="g-6 cols">
                        <span class="peep-name">
                            <h4>{{$video->nome}}</h4>
                            
                                                    
                        </span>
                        <span class="peep-bio">
                            <h4>Link para ver no</h4>
                            <hr class="sep-thin">
                            <a href="https://www.facebook.com/dialog/share?app_id=87741124305&href=https%3A//www.youtube.com/attribution_link%3Fa%3DWPwcpK334r8%26u%3D%252Fwatch%253Fv%253D{{$video->url}}%2526feature%253Dshare&display=popup&redirect_uri=https://www.youtube.com/facebook_redirect" target="_blank">Compartilhar <i class="fa fa-share" class="color:#123456;"></i> </a>
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
