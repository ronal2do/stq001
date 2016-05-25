@extends('templates.template')

@section('content')										

<section class="sect-hero center-all purple" style="background-color:#123456;background-image: url('/img/upload/{{$post->foto}}'); background-size:cover;background-position: center;"  >
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
<p>{!!$post->resumo!!}</p>
</div>
</div>
</section>

<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered">

	<p></p>
</div>
</div>
</section>


@endsection
