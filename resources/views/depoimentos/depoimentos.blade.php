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

<section class="sect-hero center-all" style="background-color: #88c8d3;"  >
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
                 
               <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>VIDEO 1</h4> 
                       
                            <p class="meta-author">12345646ois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                 <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                             
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
                 
               <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>VIDEO 1</h4> 
                       
                            <p class="meta-author">12345646ois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                 <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                             
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
                 
               <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>VIDEO 1</h4> 
                       
                            <p class="meta-author">12345646ois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                  <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                 <article class="g-3 cols">
                    <a class="venobox box" data-type="vimeo" data-overlay="rgba(136,200,211,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                        <div class="bg" style="background-image:url('img/upload/IMG_8449.jpg');"></div>
                        <div class="content">
                            <h4>CAPS</h4> 
                       
                            <p class="meta-author">Dois centros com equipamentos e profissionais prestando atendimento especializado.</p>
                        </div>
                        </div>
                    </a>
                </article>
                             
            </div>
        </section>


@endsection