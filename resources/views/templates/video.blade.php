@extends('templates.template')

@section('content')										

<section class="sect-hero center-all purple" style="background-color: #88c8d3;"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 style="color:#000;"> Nome</h1>
			</div>
	</div>
</div>
</section>

<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered"><br />
<h2></h2>

</div>
</div>
</section>

<section class="sect-content">
<div class="row g-full">
</div>

<div class="row">
<div class="row center-all"><br />
	<img src="{{ URL::asset('/') }}img/upload/{{$video->foto}}">
</div>
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
