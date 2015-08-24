@extends('templates.template')

@section('content')



<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1>Login </h1>
            <hr class="sep">
            
        </header>
    </div>
</section>
  

<!-- sect: Approach
================================================== -->
<section class="sect-content  center-all">
<div class="row g-full block-form">
                   
       <div class="row center-all"> 

      	<form method="post" action="/auth/login">
			{!! csrf_field() !!}
				<div class="g-6 cols">
					Email
					<input type="email" name="email" value="{{ old('email') }}">
				</div>
				<div class="g-6 cols">
					Senha
					<input type="password" name="password" id="password">
				</div>
				<div class="g-12 cols"> 
					<button type="submit">Login</button>
				</div>
			</form>
             
       </div>

    </div>
               
</section>







@endsection
