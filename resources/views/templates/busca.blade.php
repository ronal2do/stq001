@extends('templates.template')
@section('content')
<section class="sect-hero center-all purple" style="background-color:{{ $rand }};"  >
<div>
        <div class="row">
            <div class="g-10 cols centered">
                <h1 style="color:#fff;letter-spacing: -5px;"></h1>
            </div>
    </div>
</div>
</section>
        <section class="sect-posts intro-posts bg-lightgrey" style="text-align:center;">
            <div class="row g-full">
                    <br>
                    <h2>Sua busca por {{$query}}</h2>
                    <hr class="sep">
                    @if( $posts->count() == 0 )
                    <p>não encontramos nada, tente buscar pelo tipo de programa <br>ex.: <i>Projeto de moradias, Drenar etc...</i></p>
                    @elseif ( $posts->count() == 1 )
                    <p>retornou {{$posts->count()}} resultado</p>
                    @else
                    <p>encontramos {{$posts->count()}} resultados</p>
                    @endif
                <a class="btn-pill btn-grey" href="/realizacoes">Veja todas as realizações</a>
            </div>
            <br>
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
                    @else
                        <article class="g-3 cols">
                    @endif
                              <a class="box" rel="external" href="/{{ $p->tipo }}/{{ $p->slug }}">
                                <div class="bg" style="background-image:url('img/upload/{{$p->foto}}');"></div>
                              <span class="overlay-{{ $p->categoria->slug }}"></span>
                                <div class="content">                              
                                    <h2 style="color:#fff;">{{ $p->categoria->name }}</h2>
                                    <h2 style="color:#fff;font-family: 'Gotham-Book';">{{ $p->nome }}</h2>
                                </div> 
                              </a>  
                        </article>
                @endforeach
            @endif
            </div>
    </section>
@include('templates.seminario')

    @include('templates.obras-dest')
   @endsection


