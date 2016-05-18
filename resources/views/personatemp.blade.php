@extends('templates.template')
@section('content')
        <section id="sect-video" class="sect-masthead v-center center-all js-height">
            <div class="bg-vid" style="background:url('img/Perfil{{ $numero }}.jpg');background-size: cover; "></div>
            <div>
               <!--  @include('templates.banner') -->
            </div>
            <div class="overlay alpha"></div>
        </section>

      


        <section class="sect-posts cf bg-lightgrey xl">  
                    <div class="row">
                    <br>
                            <article class="g-6 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil1.jpg');"></div>
                              
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article class="g-3 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil4.jpg');"></div>
                                
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                             <article class="g-3 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil2.jpg');"></div>
                                
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article class="g-3 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil3.jpg');"></div>
                               
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article class="g-6 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil2.jpg');"></div>
                                
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                            <article class="g-3 cols">
                              <a class="box" rel="external" href="#">
                                <div class="bg" style="background-image:url('/img/Perfil4.jpg');"></div>
                               
                               <!--  <div class="overlay"></div>  -->
                              </a>  
                            </article>
                    </div>
        </section>

        @include('templates.seminario')

        <section class="sect-posts intro-posts bg-lightgrey" style="text-align:center;">
            <div class="row g-full">
       
                    <h2>Obras</h2>
                    <hr class="sep">
                    <p>Quer conhecer mais?</p>

                <a class="btn-pill btn-grey" href="#">Visite á Página</a>
            </div>
        </section>

        @include('templates.obras')
        @include('templates.perfis')

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