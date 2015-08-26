@extends('templates.template')

@section('content')


<section class="sect-hero center-all" style="background-color: #f4b812;" url({{ URL::asset('/') }}img/upload/{{$post->foto}}); opacity: 0.4; filter: alpha(opacity=40);>
<div>
		<div class="row">
			<div class="g-10 cols centered">
				<h1 class="logo" title="Old Creek">#Nome da Postagem </h1>
			</div>
	</div>
</div>
</section>

<!-- sect: Intro
================================================== -->
<section class="sect-content sect-intro center-all">
	<div class="row">
		<div class="g-9 cols centered">
			<h2>The Challenge</h2>
			<p>Old Creek was seeking a refreshed brand and associated online space that represented the breadth of their offerings – custom cabinetry, doors, and installations – in a form that presented the leading characteristics guiding their craft process; thoughtfully constructed home furniture composed of premium materials.</p>
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
<p>The overarching aesthetic for Old Creek is best characterized as organic; from the nature-centric imagery and tones of the color palette, to the comfortably confident voice and monogram logo capturing the company’s leading letters in a door-like shape – our vision for the brand and website was realized in a comprehensive review of the company and its product.</p>

<p>To carry this intention through development, the Urban Influence engineering team designed a user experience for Old Creek that showcased the consistent quality and classic design of the company product through page-wide original photography and intuitive interaction that resisted distracting from the focus.</p>
</div>
<div class="g-6 cols">
<p>We worked with the company to revisit their business strategy, from an overarching audit and reorganization of their current processes, to providing guidance on the purchase of a camera to better document the Old Creek story and build more complete case studies.</p>

<p>In addition to an improved brand, website, and business audit, Old Creek was in need of an improved means of garnering potential clients and their contact information. Urban Influence developed a project starter form for Old Creek that allows potential clients to engage the company with ease, offering fields to input project details, such as material preferences and space constraints, and load supporting imagery.</p>
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