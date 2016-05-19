@extends('templates.template')

@section('content')	
									
<section class="sect-hero center-all purple" style="background-color:#c5c5c5;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1>Vídeos</h1>
			</div>
	</div>
</div>
</section>

<section class="sect-posts cf bg-lightgrey xl" style="background-color:#123456;">  
            <div class="row">
            <br>
				@foreach ($videos as $video)
                  
                    <article class="g-3 cols">
                     	<iframe class="video" width="100%" height="300" src="https://www.youtube.com/embed/{{ $video->url }}?rel=0" frameborder="0" allowfullscreen=""></iframe>
                    </article>
               @endforeach     
            </div>
    </section>
@endsection
