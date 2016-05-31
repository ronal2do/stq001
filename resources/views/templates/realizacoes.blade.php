@extends('templates.template')
@section('content')									
<section class="sect-hero center-all purple" style="background-color: {{ $rand }};"  >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1>{{$titulo}}</h1>
			</div>
	</div>
</div>
</section>
@include('templates.obras-dest')
<!-- 
@include('templates.obras') -->
@endsection
