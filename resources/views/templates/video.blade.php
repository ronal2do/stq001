@extends('templates.template')

@section('content')										

<style type="text/css">
	
	.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>


<section class="sect-hero center-all purple" style="background-color: #88c8d3;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1>{{$video->nome}}</h1>
			</div>
	</div>
</div>
</section>
<section class="sect-content">
<div class="row g-full">
</div>

<div class="row">
<div class="row center-all"><br />
<div class="videoWrapper">
	<iframe width="853" height="480" src="https://www.youtube.com/embed/{{$video->url}}?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<br>
<div class="row center-all">

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

@include('contato.news') 


@endsection
