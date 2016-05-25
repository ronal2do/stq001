@extends('templates.persona')
@section('destaques')
        <section class="sect-posts intro-posts Bolinha Seminario" style="text-align:center;background-color: #fff;">
            <div class="row g-full">
          
                <h2 class="Frase"><strong class="Frase--strong">Somos</strong> o cuidado com os <strong class="Frase--strong">jovens</strong> e as <strong class="Frase--strong">crianças</strong>.</h2>
            
                
            </div>
        </section>
        <section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @foreach( $programas as $p )
                    <article class="g-{{ $p->classe or '3' }} cols">
                      <a class="box" rel="external" href="/programas/{{ $p->slug }}">
                        <div class="bg" style="background-image:url('/img/upload/{{ $p->foto }}');"></div>
                      <div class="overlay-{{$p->categoria->slug}}"></div>
                        <div class="content">
                          <h2 class="Programas__categoria">{{ $p->categoria->name }}</h2>
                          <h2 class="Programas__nome">{{ $p->nome }}</h2></div> 
                      </a>  
                    </article>
            @endforeach       
            </div>
        </section>
@endsection
@section('banner')
<div class="row intro" style="padding:30px;">
    <div class="g-5 cols"></div>
    <div class="g-7 cols">
               <h1 style="color:#fff;font-weight:100;letter-spacing: -0.1em;font-size: 3.5em;">somos<span style="font-family: 'Gotham-Book';font-weight:100;">juventude</span></h1>
    </div>
                 

</div>
@endsection
@section('perfis')
        <section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
                    <article id="2" class="g-4 cols">
                      <a class="box" rel="external" href="/mulher">
                        <div class="bg" style="background-image:url('/img/Perfil{{ $numero + 1 }}.jpg');"></div>
                       
                        <div class="overlay-2"></div> 
                        <div class="content Perfil__content">
                          <h1 class="Perfil__h1"><strong class="Perfil__h1--strong">#somos</strong>mulheres</h1>
                        </div> 
                      </a>  
                    </article>
                    <article id="3" class="g-4 cols">
                      <a class="box" rel="external" href="/geral">
                        <div class="bg" style="background-image:url('/img/Perfil{{ $numero + 2 }}.jpg');"></div>
                      
                        <div class="overlay-3"></div> 
                        <div class="content Perfil__content">
                          <h1 class="Perfil__h1"><strong class="Perfil__h1--strong">#somos</strong>bem-estar</h1>
                        </div> 
                      </a>  
                    </article>
                    <article id="4" class="g-4 cols">
                      <a class="box" rel="external" href="/idoso">
                        <div class="bg" style="background-image:url('/img/Perfil{{ $numero + 3 }}.jpg');"></div>
                       
                        <div class="overlay-4"></div> 
                        <div class="content Perfil__content">
                          <h1 class="Perfil__h1"><strong class="Perfil__h1--strong">#somos</strong>3ªidade</h1>
                        </div> 
                      </a>  
                    </article>
            </div>
        </section>
@endsection