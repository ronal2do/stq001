@extends('templates.template')

@section('content')


<section class="sect-hero center-all" style="background-color: #f4b812;" >
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 class="logo" title="Old Creek">adwdwa {{$post->nome}} </h1>
			</div>
	</div>
</div>
</section>

<!-- sect: Intro
================================================== -->
<section class="sect-content sect-intro center-all">
	<div class="row">
		<div class="g-9 cols centered">
			<h2>O desafio</h2>
			<p>{{$post->resumo}}</p>
		</div>
	</div>
</section>

<section class="sect-content bg-lightgrey">
 <div class="row">
<div class="g-10 cols centered">
<h2>Measure of Success</h2>
<p>Following a six-month engagement with Urban Influence, the Old Creek Company has been entirely re-envisioned; from the aesthetic of the company, to the experience of interaction online and throughout the contact and order placement process, the standard of the Old Creek brand is now aligned to that of the company&#8217;s product.</p>
</div>
</div>
</section>

<!-- sect: Approach
================================================== -->
<section class="sect-content">
<div class="row g-full">
<h2>Our Approach</h2>
</div>

<div class="row">
<div class="g-6 cols">
<p>{{$post->descricao}}</p>
</div>
<div class="g-6 cols">
<p>{{$post->descricao2}}</p>
</div>
</div>
</section>



<!-- sect: Old Creek Site
================================================== -->



<section class="work-nav">
	<div class="row">
		<nav>
			<ul>

					<li><a href="/postagem" rel="next"><span class="link-prev">Anterior</span></a></li>
				</a>
				
				
				<li><a href="/postagem" rel="prev"><span class="link-next">Próximo</span> </a></li>

				</a> 
			</ul>
		</nav>
	</div>
</section>


@endsection