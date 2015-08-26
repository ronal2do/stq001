@extends('templates.template')

@section('content')
 

<!--  ===============SAUDE=================== -->

<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1>Programas </h1>
            <hr class="sep">
            <p>Somos.</p>
        </header>
    </div>
</section>
  
<!-- sect Work
================================================== -->
<section id="sect-work" class="sect-work cf">

    <article class="g-4 cols">
        <a href="/single/postid" style="background-image:url(/images/work/work-oldcreek2.min.jpg);" title="View Old Creek Case Study">
        
                <div class="content">
                    <h3>Post 1</h3>
                    <hr class="sep"/>
                    <p>Loren dolem ipsum.</p>
                </div>
                
                <div class="overlay overlay-oldcreek"></div>    
                
                <ul class="work-list">
                    <li>Branding</li>
                    <li>Collateral</li>
                    <li>Interactive</li>
                </ul>                       
        </a>
    </article>



    <article class="g-4 cols">
        <a href="/single/postid" style="background-image:url(/images/work/work-pronto.min.jpg);" title="View Pronto Case Study">
        
                <div class="content">
                    <h3>Post 2</h3>
                    <hr class="sep"/>
                    <p>Loren dolem ipsum.</p>
                </div>
                
                <div class="overlay overlay-pronto"></div>  
                
                <ul class="work-list">
                    <li>Strategy</li>
                    <li>Branding</li>
                    <li>Collateral</li>
                    <li>Interactive</li>
                </ul>                       
        </a>
    </article>


    
   


</section>



@endsection