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
        bgcolor: '#c6c2d9',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
});
</script>

<section class="sect-hero center-all" style="background-color: #c6c2d9;"  >
    <div class="row g-full" >
        <header >
            <h1>Infográficos </h1>
            <hr class="sep">
            
        </header>
    </div>
</section>
     <section class="sect-intro intro-work">
            <div class="row g-full">
                <header>
                    
                    
                    <p>Somos nossas conquistas e realizações </p>
          			<p>Escolher 1 dos 2 parágrafos</p>
                </header>
            </div>
        </section>
<!-- sect Work
================================================== -->
<section class="sect-work cf xl bg-white">
            <div class="row">
                  <article class="g-6 cols">
                    <a class="venobox" data-type="vimeo" data-overlay="#c6c2d9"  href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                            <h3>#Infográfico </h3>
                            <hr class="sep" />
                            <p>descrição  Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento.</p>
                        </div></a>
                </article>
                <article class="g-6 cols">
                    <a class="venobox" data-type="vimeo" data-overlay="rgba(198,194,217,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                            <h3>#Infográfico </h3>
                            <hr class="sep" />
                            <p>descrição  Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento.</p>
                        </div></a>
                </article>
                 <article class="g-6 cols">
                    <a class="venobox" data-type="youtube" data-overlay="rgba(198,194,217,0.8)" href="http://youtu.be/7vvJnOvYFp0" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                            <h3>#Youtube </h3>
                            <hr class="sep" />
                            <p>descrição  Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento.</p>
                        </div></a>
                </article>
                 <article class="g-6 cols">
                    <a class="venobox" data-type="vimeo" data-overlay="rgba(198,194,217,0.8)" href="http://vimeo.com/75976293" style="background-image:url(img/home/home.jpg);" title="Somossbc"><div class="content">
                            <h3>#Infográfico </h3>
                            <hr class="sep" />
                            <p>descrição  Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento.</p>
                        </div></a>
                </article>
                             
            </div>
        </section>



@endsection