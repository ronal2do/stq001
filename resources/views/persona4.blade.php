@extends('templates.persona')
@section('destaques')
        <section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            <br>
            @foreach( $programas as $pr )
                    <article class="g-{{ $pr->classe or '3' }} cols">
                      <a class="box" rel="external" href="/programas/{{ $pr->slug }}">
                        <div class="bg" style="background-image:url('/img/upload/{{ $pr->foto }}');"></div>
                      
                        <div class="content"><h2 style="color:#fff;">{{ $pr->nome }}</h2></div> 
                      </a>  
                    </article>
            @endforeach       
            </div>
        </section>
@endsection
@section('perfis')
        <section class="sect-posts cf bg-lightgrey xl">  
                    <div class="row">
                            <article id="2" class="g-4 cols">
                              <a class="box" rel="external" href="/mulher">
                                <div class="bg" style="background-image:url('/img/Perfil{{ $numero - 3 }}.jpg');"></div>
                               
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article id="3" class="g-4 cols">
                              <a class="box" rel="external" href="/homem">
                                <div class="bg" style="background-image:url('/img/Perfil{{ $numero - 2 }}.jpg');"></div>
                              
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article id="4" class="g-4 cols">
                              <a class="box" rel="external" href="/idoso">
                                <div class="bg" style="background-image:url('/img/Perfil{{ $numero - 1 }}.jpg');"></div>
                               
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                    </div>
        </section>
@endsection