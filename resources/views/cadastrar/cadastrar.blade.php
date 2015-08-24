@extends('templates.template')

@section('content')


<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1>Cadastro </h1>
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
          {!!Form::open( ['url' => "postagem/$post->id/editar"])!!}
       @else
          {!!Form::open( ['url' => 'cadastrar', 'files' => true])!!}
       @endif
              <div class="g-12 cols">
                {!!Form::text('nome', isset($post->nome) ? $post->nome : null , ['placeholder' => 'Título da postagem'] )!!}
              </div>
             <div class="g-6 cols">
                {!!Form::select('categoria', $categoria, isset($post->categoria) ? $post->categoria : null )!!}
             </div>
             <div class="g-6 cols">
                 {!!Form::file('foto' )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::text('resumo', isset($post->resumo) ? $post->resumo : null , ['placeholder' => 'Resumo do post'] )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::text('descricao', isset($post->descricao) ? $post->descricao : null , ['placeholder' => 'Descrição', 'rows' => '20' ] )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::text('descricao2', isset($post->descricao2) ? $post->descricao2 : null , ['placeholder' => 'Descrição bloco 2', 'rows' => '20' ] )!!}
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