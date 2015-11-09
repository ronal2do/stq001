@extends('templates.template')

@section('content')


<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1> Publique </h1>
            <hr class="sep">
        </header>
    </div>
</section>
  

<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered"><br />
<h2>Atenção</h2>
<p>Ao clicar em Publicar você estará concordando com os termos que podem ser lidos abaixo.</p>
</div>
</div>
</section>
<!-- sect: Approach
================================================== -->
<section class="sect-content" style="background-color: white;">
<div class="block-half block-form">
      <div>             
       <h3>Publique sua história!</h3>
       <hr class="sep">
       <div class="row"> 

       @if( isset($post) )
          {!!Form::open( ['url' => "postagem/$post->id/editar"])!!}
       @else
          {!!Form::open( ['url' => 'cadastrar', 'files' => true])!!}
       @endif
              <div class="g-6 cols">
                {!!Form::text('nome', isset($post->nome) ? $post->nome : null , ['placeholder' => 'Título'] )!!}
              </div>
             
             <div class="g-6 cols">
                 {!!Form::file('foto' )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::text('resumo', isset($post->resumo) ? $post->resumo : null , ['placeholder' => 'Seu nome e email para contato'] )!!}
             </div>
              <div class="g-12 cols">
                {!!Form::textarea('descricao', isset($post->descricao) ? $post->descricao : null , ['placeholder' => 'Descrição', 'rows' => '10' ] )!!}
             </div>
              
              <div class="g-12 cols">
                 {!!Form::submit('Publicar')!!}
             </div>
        {!!Form::close()!!}
       </div>

       <a href="{{ URL::route('logout') }}">Voltar</a>

    </div>
  </div>                
</section>


<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered"><br />
<h2>Licença dos seus conteúdos e propriedade intelectual</h2>
<p>Você deverá ter mais de 18 anos. Menores de idade não podem participar. </p>
<p>Ao enviar qualquer conteúdo ou informação para o Site, incluindo textos, tais como comentários, fóruns de discussão, comunidades, enquetes, testes, seção de dúvidas, participação em concurso cultural, jogos, envio de fotografias, ilustrações, vídeos, arquivos de áudio e outros materiais, você declara autorizar, de forma gratuita, não exclusiva, perpétua, global e livre de remuneração, compensação, retenção ou indenização, o uso do conteúdo por nós, por qualquer modalidade e suporte, para publicação, reprodução, transmissão, retransmissão, distribuição, comunicação ao público, edição, adaptação e outras transformações, tradução para qualquer idioma, inclusão em quaisquer outras obras, representação, execução, uso por radiodifusão e outros meios de comunicação, mediante o emprego de qualquer tecnologia, exposição, inclusão em base de dados e quaisquer outras modalidades de utilização existentes ou que venham a ser inventadas no futuro, em quaisquer suportes existentes ou que venham a ser inventados no futuro, autorizando também a criação de obras derivadas e o sublicenciamento do material para uso em outras plataformas de comunicação, sem limite de tempo, território ou número de utilizações. Qualquer eventual omissão não implicará limitação de uso do material por nós.</p>
<h2>Caso você não concorde com a autorização acima, ou não tenha os direitos necessários para emitir essa autorização com relação a um conteúdo, você não deve enviar o conteúdo para nós.</h2>
<p>Você só deve enviar pelo Site ou para o Site materiais originais seus. Todos os direitos autorais patrimoniais sobre o material submetido por você continuam sendo seus.</p>
<p>Não temos qualquer obrigação de uso dos seus conteúdos e nem perderemos o direito de usá-los, ainda que esse direito não seja exercido por nós.</p>
</div>
</div>
</section>





@endsection