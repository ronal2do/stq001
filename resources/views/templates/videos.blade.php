@extends('templates.template')

@section('content')
 

<!--  ===============SAUDE=================== -->

<!-- Add venobox -->
<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
<script type="text/javascript" src="venobox/venobox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    $('.venobox_custom').venobox({
        framewidth: '400px',        // default: ''
        frameheight: '300px',       // default: ''
        border: '10px',             // default: '0'
        bgcolor: '#88c8d3',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
});
</script>

<section class="sect-hero center-all" style="background-color: {{$cor}};"  >
    <div class="row g-full" >
        <header >
            <h1 class="intro-title dk">Videos </h1>
            <hr class="sep">
            
        </header>
    </div>
</section>
 <section class="sect-intro intro-work">
            <div class="row g-full">
                <header>
                    
                    
                    <p>Campanhas </p>
                    
                </header>
            </div>
        </section>
<!-- sect Work
================================================== -->
<section class="sect-posts cf bg-lightgrey xl">
            <div class="row">
            @forelse ($videoc as $videoc)  
               <article class="g-3 cols">
                    <a class="venobox box" data-type="youtube" data-overlay="rgba(136,200,211,0.8)" href="{{$videoc->url}}" style="background-image:url(/img/upload/{{$videoc->foto}});" title="{{$videoc->nome}}"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/{{$videoc->foto}}');"></div>
                        <div class="content">
                            <h4>{{$videoc->nome}}</h4>
                            <p class="meta-author"></p>
                        </div>
                        </div>
                    </a>
                </article>
            @empty
             <p>Nenhuma postagem</p>
            @endforelse          
            </div>
            <div class="center-all">
                <a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw" target="_blank">
                    Ver mais
                </a>
            </div>
        </section>
     <section class="sect-intro intro-work">
            <div class="row g-full">
                <header>
                    
                    
                    <p>Depoimentos </p>
          			
                </header>
            </div>
        </section>
<!-- sect Work
================================================== -->
<section class="sect-posts cf bg-lightgrey xl">
            <div class="row">
            @forelse ($videod as $videod)  
               <article class="g-3 cols">
                    <a class="venobox box" data-type="youtube" data-overlay="rgba(136,200,211,0.8)" href="{{$videod->url}}" style="background-image:url(/img/upload/{{$videod->foto}});" title="{{$videod->nome}}"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/{{$videod->foto}}');"></div>
                        <div class="content">
                            <h4>{{$videod->nome}}</h4>
                            <p class="meta-author"></p> 
                        </div>
                        </div>
                    </a>
                </article>
            @empty
             <p>Nenhuma postagem</p>
            @endforelse          
            </div>
            <div class="center-all">
                <a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw" target="_blank">
                    Ver mais
                </a>
            </div>
        </section>
 <section class="sect-intro intro-work">
            <div class="row g-full">
                <header>
                    <p>Matérias </p>
                </header>
            </div>
        </section>
<!-- sect Work
================================================== -->
<section class="sect-posts cf bg-lightgrey xl">
            <div class="row">
            @forelse ($videom as $videom)  
               <article class="g-3 cols">
                    <a class="venobox box" data-type="youtube" data-overlay="rgba(136,200,211,0.8)" href="{{$videom->url}}" style="background-image:url(/img/upload/{{$videom->foto}});" title="{{$videom->nome}}"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/{{$videom->foto}}');"></div>
                        <div class="content">
                            <h4>{{$videom->nome}}</h4> 
                       
                            <p class="meta-author"></p>
                        </div>
                        </div>
                    </a>
                </article>
            @empty
             <p>Nenhuma postagem</p>
            @endforelse          
            </div>
            <div class="center-all">
                <a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw" target="_blank">
                    Ver mais
                </a>
            </div>
        </section>


@endsection