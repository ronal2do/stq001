@extends('templates.template')

@section('content')
<!-- Contact
================================================== -->
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
                <p>Lorem dolen <br/>
                    Ipsum, 123 <br/>
                    <a class="link-line link-invert" href="mailto:email@email.com">email@email.com</a> <br/>
                     <span>P</span> 1234.5678  | <span>F</span> 1234.5678
                    </p>
      </div>
    </div>
  
    <div class="block-half block-form">
      <div>             
       <h3>Fale conosco</h3>
       <hr class="sep">
       <!-- Contact Form -->           
                    {!!Form::open( ['url' => '/mensagem'])!!}
                        <div class="g-6 cols">
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::text('name', isset($post->name) ? $post->nome : null , ['placeholder' => 'Nome'] )!!}
                          </span>
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::text('bairro', isset($post->bairro) ? $post->bairro : null , ['placeholder' => 'bairro'] )!!}
                          </span>
                          <span class="wpcf7-form-control-wrap the-phone">
                               {!!Form::text('telefone', isset($post->telefone) ? $post->telefone : null , ['placeholder' => 'telefone'] )!!}
                          </span>
                          <span class="wpcf7-form-control-wrap first-name">
                               {!!Form::text('email', isset($post->email) ? $post->email : null , ['placeholder' => 'email'] )!!}
                          </span>
                        </div>
                       
                        <p class="wpcf7-form-text">
                          <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-dark" />
                        </p>
                        
                    {!!Form::close()!!}



        </div>     
      </div>
    </div>
  </div>                             
</section>

<!--

                    <form name="" action="/contact/#wpcf7-f2276-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div style="display: none;">
                       <input type="hidden" name="pgn" value="1f91bb089c" />
                    </div>
                    <div class="xl">
                    <div class="row">
                    <div class="g-6 cols">
                    <span class="wpcf7-form-control-wrap first-name">
                      <input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nome" /></span>
                    </div>
                    <div class="g-6 cols">
                    <span class="wpcf7-form-control-wrap last-name">
                      <input type="text" name="bairro" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Bairro" /></span>
                    </div>

                    <div class="g-6 cols">
                    <span class="wpcf7-form-control-wrap the-email">
                      <input type="email" name="the-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="email" /></span>
                    </div>
                    <div class="g-6 cols">
                    <span class="wpcf7-form-control-wrap the-phone">
                      <input type="text" name="the-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telefone" /></span>
                    </div>
                    <div class="g-12 cols">
                    <span class="wpcf7-form-control-wrap the-message">
                      <textarea name="the-message" cols="40" rows="2" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Mensagem"></textarea></span>
                    </div>
                    <div class="g-12 cols quiz">
                    </p>
                        <p class="wpcf7-form-text">
                          <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-dark" />
                        </p>
                    </div>
                    </div>
                    </div>
          <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
-->


<!-- Signup
================================================== -->  

@include('contato.news')


@endsection