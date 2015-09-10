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
    @forelse ($posts as $post)
            <div class="{{$classe}}"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                      
                        <div class="cycle-slideshow composite-example" 
                             data-cycle-fx="scrollHorz" 
                             data-cycle-slides="> div"
                             data-cycle-timeout="4000"
                            >
                            <div class="fadie">
                                <img src="/img/upload/{{$post->foto}}" width=100%>
                           
                            </div>
                            <div class="fadie">
                                <img src="/img/upload/{{$post->descricao2}}" width=100%>
                                
                            </div>
                        </div>
                   
                    </div>
                    <div class="g-6 cols">
                    <a href="/postagem/{{$post->id}}">
                        <span >
                            <h2 style="font-size:3em;">#{{$post->nome}}</h2>
                        </span>
                        </a><a href="/postagem/{{$post->id}}">
                        <span  >
                            <p style="color: #000;">{!!$post->resumo!!}</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
    @empty
        <p>Nenhuma postagem</p>
    @endforelse


    </section>
 </div>
 
@include('contato.news') 
  @endsection