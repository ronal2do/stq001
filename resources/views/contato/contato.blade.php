@extends('templates.template')

@section('content')
<section class="sect-hero center-all" style="background-color: #f4b812;" >
    <div class="row g-full" >
        <header >
            <h1>Seja São Bernardo </h1>
            <hr class="sep">
        </header>
    </div>
</section>
<section class="sect-contact cf">
  <div class="block-wrap">
    <div class="block-half block-contact sect-dark">
      <div>             
       <h3>Contato</h3>
       <hr class="sep-left">
       <div style="padding: 20px 120px 120px 120px;"><p>Faça seu cadastro e tenha acesso às novidades e às informações sobre a cidade. <br />Participando da nossa comunidade você também pode deixar sua foto, mensagem ou vídeo mostrando o que faz você ser São Bernardo.</p></div>
                    
      </div>
    </div>
    <div class="block-half block-form">
      <div>             
       <h3>Fale conosco</h3>
       <hr class="sep">     
                    {!!Form::open( ['url' => '/mensagem'])!!}
                        <div class="g-6 cols">
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::text('name', isset($post->name) ? $post->nome : null , ['placeholder' => 'Nome', 'required'] )!!}
                          </span>
                        </div>
                        <div class="g-6 cols">
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::text('bairro', isset($post->bairro) ? $post->bairro : null , ['placeholder' => 'Bairro', 'required'] )!!}
                          </span>
                        </div>
                        <div class="g-6 cols"> 
                          <span class="wpcf7-form-control-wrap the-phone">
                               {!!Form::text('telefone', isset($post->telefone) ? $post->telefone : null , ['placeholder' => 'Telefone', 'required'] )!!}
                          </span>
                        </div>
                        <div class="g-6 cols">
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::email('email', isset($post->email) ? $post->email : null , ['placeholder' => 'email', 'required' ] )!!}
                          </span>
                        </div>
                         <div class="g-12 cols">
                          <span class="wpcf7-form-control-wrap the-message">
                               {!!Form::textarea('mensagem', isset($post->mensagem) ? $post->mensagem : null , ['placeholder' => 'Mensagem', 'class' => 'wpcf7-form-control wpcf7-textarea', 'cols' => '40'] )!!}
                          </span>
                        </div>
                       
                        <div class="g-12 cols">
                        <p class="wpcf7-form-text">
                          <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-dark" onclick="ga('send','event', 'formulario','clique','contato');"  />  
                        </p>
                        </div>
                 {!!Form::close()!!}
        </div>     
      </div>
    </div>
  </div>                             
</section>

@include('contato.news')

@endsection