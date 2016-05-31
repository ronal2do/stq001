@extends('templates.template')
@section('content')
<section class="sect-hero center-all purple" style="background-color:{{ $cor }};"  >
<div>
        <div class="row">
            <div class="g-10 cols centered">
                <h1 style="color:#fff;letter-spacing: -5px;">{{$titulo}}</h1>
            </div>
    </div>
</div>
</section>
      
      <section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @if( $posts->count() != 0 )
                @foreach( $posts as $p )
                    @if( $posts->count() == 1 )
                        <article class="g-12 cols">
                    @elseif ( $posts->count() == 2 )
                        <article class="g-6 cols">
                    @elseif ( $posts->count() == 3 )
                        <article class="g-4 cols">
                    @elseif ( $posts->count() == 4 )
                        <article class="g-3 cols">
                    @elseif ( $posts->count() == 5 )
                        <article class="g-4 cols">
                    @else ( $posts->count() > 5 )
                        <article class="g-3 cols">
                    @endif
                              <a class="box" rel="external" href="/{{ $p->tipo }}/{{ $p->slug }}">
                                <div class="bg" style="
                                @if( $p->foto !== '' )
                                    background-image:url('img/upload/{{$p->foto}}');
                                @else
                                    background-color:{{ $rand }};
                                @endif   
                                "></div>
                              <span class="overlay-{{ $p->categoria->slug }}"></span>
                                <div class="content">                              
                                    <h2 style="color:#fff;font-family: 'Gotham-Book';">{{ $p->nome }}</h2>
                                </div> 
                              </a>  
                        </article>
                @endforeach
            @endif
            </div>
    </section>
    <section class="sect-posts intro-posts Bolinha Seminario" style="text-align:center;background-color: #fff;">
        <div class="row g-full Confira">
      
            <h2 class="Confira--frase">Confira mais <strong class="Confira--strong">realizações</strong>.</h2>
        
            <a class="btn-pill btn-grey" href="/realizacoes">Visite á Página</a>
        </div>
    </section>
    @include('templates.obras-dest')
@endsection


