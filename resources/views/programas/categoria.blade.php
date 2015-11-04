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
            <div class="{{$classe}}">
                <div class="row">
                    <div class="g-6 cols">
                        <iframe width="480" height="260" src="{{$video}}?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="g-6 cols">
                       <span> <h1 style="font-size:4.5rem;">{{$video_nome}}</h1></span>
                           
                          
                       
                    </div>
                </div>
            </div>                                   
    @forelse ($posts as $post)
            <div class="{{$classe}}"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                      
                        <div class="cycle-slideshow composite-example" 
                             data-cycle-fx="scrollHorz" 
                             data-cycle-slides="> div"
                             data-cycle-timeout="4000"
                             data-cycle-center-horz=true
                            >
                            <div style="text-align: center" >
                                <img src="/img/upload/{{$post->foto}}" >                           
                            </div>
                            <div style="text-align: center" >
                                <img src="/img/upload/{{$post->descricao2}}" >                                
                            </div>
                            <div style="text-align: center" >
                                <img src="/img/upload/{{$post->foto2}}" >
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