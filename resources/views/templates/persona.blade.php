@extends('templates.template')
@section('content')
        <section id="sect-video" class="sect-masthead v-center center-all js-height">
            <div class="bg-vid" style="background:url('img/Perfil{{ $numero }}.jpg');background-size: cover; "></div>
            <div>
               <!--  @include('templates.banner') -->
            </div>
            <div class="overlay alpha"></div>
        </section>

      

        @yield('destaques')

        @include('templates.seminario')

        <section class="sect-posts intro-posts bg-lightgrey" style="text-align:center;">
            <div class="row g-full">
       
                    <h2>Realizações</h2>
                    <hr class="sep">
                    <p>Quer conhecer mais?</p>

                <a class="btn-pill btn-grey" href="/realizacoes">Visite á Página</a>
            </div>
        </section>

        @include('templates.obras')
        @include('templates.perfis')

      @yield('perfis')
   @endsection