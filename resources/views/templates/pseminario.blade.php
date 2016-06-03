@extends('templates.template')

@section('content')	
									
<section class="sect-hero center-all purple" style="background-color: {{$rand}};"  >
<div>
	<div class="row">
		<h1 style="color:#fff;">Seminário</h1>
	</div>
</div>
</section>
<section class="sect-posts intro-posts bg-lightgrey" style="text-align:center;">
            <div class="row g-full">
            <br>
            <p>Seminário Municipal São Bernardo que Cuida de Gente Programas e ações de promoção do desenvolvimento humano.
		           
					Experiências, abordagens e propostas repensando políticas e práticas públicas

					nas áreas da educação, esporte, saúde, segurança urbana, assistência social,

					cultura e gestão ambiental.

					Programe-se. Participe. Transforme.</p>
        
        </section>
<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered">

	<p></p>
</div>
</div>
</section>


@endsection


@section('facebook')
	<meta property="og:url"           content="http://somossbc.com.br/\" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="somossbc" />
	<meta property="og:description"   content="\" />

	   <meta property="og:image"         content="http://somossbc.com.br/img/upload\'" />		

@endsection


