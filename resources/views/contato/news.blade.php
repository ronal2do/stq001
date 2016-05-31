<section class="v-center Bolinha">
    <div>
  <div class="row">
    <div class="g-4 cols">
      <h4 class="Contato__h4">participe</h4>
     
      <div ><p class="Contato__p">Mande sua foto, imagem ou mensagem mostrando o que faz você ser São Bernardo que a gente posta nas redes sociais da prefeitura.</p>
        </div>
        <br>
       <p class="">
           <a href="/cadastrar" value="Clique aqui" class="btn-pill btn-grey">Participe</a>  
       </p>
    </div>
    <div class="g-8 cols" >
    <h4 class="Contato__h4">fique por dentro</h4>
        <p class="Contato__p">Faça seu cadastro e tenha acesso às novidades e às informações sobre a cidade.</p>
          {!!Form::open( ['url' => '/mensagem'])!!}
              <div class="g-6 cols input-field">
                <span class="">
                     {!!Form::text('nome', isset( $post->nome) ? $post->nome : null , ['placeholder' => 'Nome', 'required'] )!!}
                </span>
              </div>
              <div class="g-6 cols input-field">
                <span class="">
                     {!!Form::text('bairro', isset($post->bairro) ? $post->bairro : null , ['placeholder' => 'Bairro'] )!!}
                </span>
              </div>
              <div class="g-6 cols input-field"> 
                <span class="">
                     {!!Form::text('telefone', isset($post->telefone) ? $post->telefone : null , ['placeholder' => 'Telefone'] )!!}
                </span>
              </div>
              <div class="g-6 cols input-field">
                <span class="">
                     {!!Form::email('email', isset($post->email) ? $post->email : null , ['placeholder' => 'Email', 'required' ] )!!}
                </span>                         
              </div>         
              <input type="submit" value="Enviar" class="btn-pill btn-grey" onclick="ga('send','event', 'formulario','clique','newsletter');"  /> 
           {!!Form::close()!!}          
      </div>
 </div>
</section>
