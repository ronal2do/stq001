@extends('templates.template')
@section('content')
        <section id="sect-video" class="sect-masthead v-center center-all js-height">
            <div class="bg-vid" style="background:url('img/Perfil{{ $numero }}.jpg');background-size: cover; "></div>
            <div>
               @yield('banner')
            </div>
          
        </section>
        @yield('destaques')

        @include('templates.seminario')

        @yield('perfis')
        <section class="sect-posts intro-posts Bolinha Seminario" style="text-align:center;background-color: #fff;">
            <div class="row g-full Confira">
          
                <h2 class="Confira--frase"><strong class="Confira--strong">Programas</strong> e <strong class="Confira--strong">ações</strong> em <strong class="Confira--strong">destaque</strong>.</h2>
            
                <a class="btn-pill btn-grey" href="/realizacoes">Confira</a>
            </div>
        </section>
        @include('templates.obras-dest')
       
   @endsection