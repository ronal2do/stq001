<section id="sect-signup" class="sect-signup v-center">
    <div>
  <div class="row">
    <div class="g-6 cols">
      <h4>Fique por dentro de todas as novidades</h4>
    </div>

    <div class="g-6 cols">
      <div class="row">
        {!!Form::open( ['url' => '/news'])!!}
        <div class="g-4 xsm-4 cols">
          {!!Form::text('name', isset($post->name) ? $post->nome : null , ['placeholder' => 'Nome', 'required'] )!!}        
        </div>
        <div class="g-4 xsm-4 cols">
          {!!Form::email('email', isset($post->email) ? $post->email : null , ['placeholder' => 'email', 'required'] )!!}        
        </div>
        <div class="g-4 xsm-4 cols">
          <input type="submit" value="Participar" class="btn btn-med postfix">
        </div>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
 </div>
</section>
