@extends('templates.template')

@section('content')


<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1>Cadastro de Videos</h1>
            <hr class="sep">
        </header>
    </div>
</section>
  

<!-- sect: Approach
================================================== -->
<section class="sect-content">
<div class="block-half block-form">
      <div>             
       <h3>Cadastrar | Editar</h3>
       <hr class="sep">
       <div class="row"> 

       @if( isset($post) )
          {!!Form::open( ['url' => "video/$post->id/editar"])!!}
       @else
          {!!Form::open( ['url' => 'cadastrarvideo', 'files' => true])!!}
       @endif
              <div class="g-12 cols">
                {!!Form::text('nome', isset($post->nome) ? $post->nome : null , ['placeholder' => 'Título da postagem'] )!!}
              </div>
             <div class="g-6 cols">
                {!!Form::select('vid_categoria', $vid_categoria, isset($post->vid_categoria) ? $post->vid_categoria : null )!!}
             </div>
             <div class="g-6 cols">
                 {!!Form::file('foto' )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::text('url', isset($post->url) ? $post->url : null , ['placeholder' => 'URL do youtube ex. https://youtu.be/wYtu9H4y1gQ' ] )!!}
             </div>
              <div class="g-12 cols">
                 {!!Form::submit('Publicar')!!}
             </div>
        {!!Form::close()!!}
       </div>

       <a href="{{ URL::route('logout') }}">Sair</a>

    </div>
  </div>                
</section>







@endsection