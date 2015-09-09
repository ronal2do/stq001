<section id="sect-signup" class="sect-signup v-center">
    <div>
  <div class="row">
    <div class="g-6 cols">
      <h4>Fique por dentro de todas as novidades</h4>
      <hr class="sep-left">
      <div ><p>Participando da nossa comunidade você também pode deixar sua foto, mensagem ou vídeo mostrando o que faz você ser São Bernardo.</p>
        </div>
       <p class="wpcf7-form-text">
           <a href="/cadastrar" value="Clique aqui" class="wpcf7-form-control wpcf7-submit btn btn-dark"> Clique aqui</a>  
       </p>

    </div>

    <div class="g-6 cols" >
    <br />
      <br />
      <hr class="sep-left">

                <p>Faça seu cadastro e tenha acesso às novidades e às informações sobre a cidade.</p>
      
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
                               {!!Form::email('email', isset($post->email) ? $post->email : null , ['placeholder' => 'Email', 'required' ] )!!}
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
</section>
