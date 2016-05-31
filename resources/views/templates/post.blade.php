@extends('templates.template')
@section('content')										
<style>
	.btn-social{
		letter-spacing: 0;
		padding: 0.7em 0.6em;
	}
</style>
<section class="sect-hero center-all purple" style="
			@if ( $post->foto !== '' )
			background-image: url('/img/upload/{{$post->foto}}'); background-size:cover;background-position: center;
			@endif
			background-color:{{ $rand }};
			">
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 style="color:#fff;letter-spacing: -5px;"> {!!$post->nome!!}</h1>
			</div>
	</div>
</div>
</section>

<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered"><br />


</div>
</div>
</section>
<section class="sect-posts intro-posts bg-lightgrey" style="text-align:center;">
            <div class="row g-full">
            <p>{!!$post->resumo!!}</p>
            <hr>

                    <br>
                   
           	@if ( $post->link !== '' )
            	 <a class="btn-pill btn-grey" href="{{ $post->link }}">Site da prefeitura <i class="fa fa-external-link"></i></a>
            @elseif( $post->link == NULL )
            	<a class="btn-pill btn-grey" 
            	target="_blank" 
            	href="http://www.saobernardo.sp.gov.br/busca?p_p_id=3&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&_3_struts_action=%2Fsearch%2Fsearch&_3_cur=1&_3_format=&_3_keywords={{$post->nome}}&_3_groupId=0&_3_entryClassName=&_3_modifiedselection=0">Site da prefeitura <i class="fa fa-external-link"></i></a>
            @else
            	<a class="btn-pill btn-grey" 
            	target="_blank" 
            	href="http://www.saobernardo.sp.gov.br/busca?p_p_id=3&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&_3_struts_action=%2Fsearch%2Fsearch&_3_cur=1&_3_format=&_3_keywords={{$post->nome}}&_3_groupId=0&_3_entryClassName=&_3_modifiedselection=0">Site da prefeitura <i class="fa fa-external-link"></i></a>
            @endif
            </div><br>
                               <h2>Compartilhar</h2>
                    <hr class="sep">
            <a href="https://www.facebook.com/dialog/share?app_id=145634995501895&display=popup&href=http://somossbc.com.br/{{ $post->tipo }}/{{ $post->slug }}" class="btn-pill btn-grey btn-social" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
            <a href="https://twitter.com/intent/tweet?text=somosSBC&url=http://somossbc.com.br/{{ $post->tipo }}/{{ $post->slug }}&hashtag=somosSBC" class="btn-pill btn-grey btn-social" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
            <a href="https://plus.google.com/share?url=http://somossbc.com.br/{{ $post->tipo }}/{{ $post->slug }}" class="btn-pill btn-grey btn-social" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a>
            <br>
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
	<meta property="og:url"           content="http://somossbc.com.br/{{ $post->tipo }}/{{ $post->slug }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="somossbc" />
	<meta property="og:description"   content="{{ $post->nome }}" />
	@if ( $post->foto !== '' )
	<meta property="og:image"         content="http://somossbc.com.br/img/upload/{{$post->foto}}'" />		
	@endif
@endsection
