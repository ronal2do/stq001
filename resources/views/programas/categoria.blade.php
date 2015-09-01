@extends('templates.template')
@section('content')
<section class="sect-hero center-all" style="background-color: {{$cor}};" >
    <div class="row g-full" >
        <header >
            <h1>{{$titulo or 'Categoria'}} </h1>
            <hr class="sep">
            
        </header>
    </div>
</section>  
<div class="culture center-all">
        <section id="realizacoes" class="sect-work sect-peeps bg-white" >                                   
            <div class="peep-wrap"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/home/saude.png" alt="Saúde">
                            <img class="peep-pic bottom" src="/img/home/hc.png" alt="Saúde">
                        </div>
                    </div>
                    <div class="g-6 cols" >
                      <a href="/saude">
                            <span class="peep-name">
                                <h2>#Saúde</h2>
                            </span>
                       </a>
                        <a href="/saude">
                        <span class="peep-bio">
                            <h2 style="font-size:4em; font-color:#f6acb3;">Hospital de Clínicas Municipal</h2>
                            <p style="font-color:#f6acb3;" >Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento. </p>
                            <p style="font-style: italic;">Conheça <i class="fa fa-chevron-right"></i></p>
                        </span>
                       <a>
                    </div>
                </div>
            </div>

    @forelse ($posts as $post)
            <div class="peep-wrapa"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/upload/{{$post->foto}}" alt="{{$post->nome}}">
                            <img class="peep-pic bottom" src="/img/upload/{{$post->foto}}" alt="{{$post->nome}}">
                        </div>
                    </div>
                    <div class="g-6 cols">
                    <a href="/postagem/{{$post->id}}">
                        <span class="peep-name">
                            <h2>#{{$post->nome}}</h2>
                        </span>
                        </a><a href="/postagem/{{$post->id}}">
                        <span class="peep-bio" >
                            
                            <p>{!!$post->resumo!!}</p>
                            <p style="font-style: italic;">Conheça <i class="fa fa-chevron-right"></i></p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
    @empty
        <p>Nenhuma postagem</p>
    @endforelse
    @endsection

    </section>
 </div>

