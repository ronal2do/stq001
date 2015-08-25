@extends('templates.template')
@section('content')
<section class="sect-hero center-all" style="background-color: {{$cor}};"  >
    <div class="row g-full" >
        <header >
            <h1>{{$titulo or 'Categoria'}} </h1>
            <hr class="sep">
            <div >      
                        <a href="saude" style="text-color:#000;">
                        Saúde |
                        </a>
                        <a href="educacao">Educação |</a>
                        <a href="infraestrutura">Infraestrutura |</a>
                        <a href="meioambiente">Meio Ambiente |</a>
                        <a href="cidadania">cidadania |</a>
                        <a href="esporte">esporte </a>  
            </div>
        </header>
    </div>
</section>  
<section id="sect-work" class="sect-work cf">
@forelse ($posts as $post)
    <article class="g-4 cols">
        <a href="/postagem/{{$post->id}}" style="background-image:url(/img/upload/{{$post->foto}});" title="{{$post->nome}}">        
                <div class="content">
                    <h3>{{$post->nome}}</h3>
                    <hr class="sep"/>
                    <p>{!!$post->resumo!!}</p>
                </div>                
               <div class="overlay green"></div>
        </a>
    </article>
@empty
 <p>Nenhuma postagem</p>
@endforelse 
</section>
@endsection