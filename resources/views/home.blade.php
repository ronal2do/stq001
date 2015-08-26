@extends('templates.template')

@section('content')
<!-- Contact
================================================== -->
<section class="sect-hero center-all" style="background-color: #f4b812;" >
    <div class="row g-full" >
        <header >
            <h1>Administração </h1>
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
               
                    <a class="link-line link-invert" href="mailto:email@email.com">email@email.com</a> <br/>
                   
      </div>
    </div>
  
    <div class="block-half block-form">
      <div>             
       <h3>Links</h3>
       <hr class="sep">
       	<ul>
       		<li><a href="cadastrar">Cadastrar Artigos</a></li>
       		<li><a href="cadastrarvideo">Cadastrar Vídeos</a></li>
       		<li><a href="artigos">Listar artigos para edição | Exclusão</a></li>
       		<li><a href="editarvideo">Listar vídeos para edição | Exclusão</a></li>

       	</ul>

        </div>     
      </div>
    </div>
  </div>                             
</section>

@endsection