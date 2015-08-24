@extends('templates.template')

@section('content')
 
<section class="sect-hero center-all" style="background-color: #60a69d;"  >
    <div class="row g-full" >
        <header >
            <h1>Realizações </h1>
            <hr class="sep">
        </header>
    </div>
</section>
 @include('contato.news')

<!-- sect Peeps
================================================== -->		
    <div id="ancora" class="culture center-all">
<section class="sect-work sect-peeps bg-white" >                                   
            <div class="peep-wrap"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/home/saude.png" alt="Saúde">
                            <img class="peep-pic bottom" src="/img/home/hc.png" alt="Saúde">
                        </div>
                    </div>
                    <div class="g-6 cols" >
                      <a href="/saude">
                            <span class="peep-name">
                                <h2>#Saúde</h2>
                            </span>
                       </a>
                        <a href="/saude">
                        <span class="peep-bio">
                            <h2 style="font-size:4em; font-color:#f6acb3;">Hospital de Clínicas Municipal</h2>
                            <p style="font-color:#f6acb3;" >Somos o Hospital de Clínicas Municipal e outras realizações que cuidam da prevenção, do atendimento, do tratamento.</p>
                        </span>
                       <a>
                    </div>
                </div>
            </div>
            <div class="peep-wrapa"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/home/educ.png" alt="Educação">
                            <img class="peep-pic bottom" src="/img/home/educ2.png" alt="Educação">
                        </div>
                    </div>
                    <div class="g-6 cols">
                    <a href="/educacao">
                        <span class="peep-name">
                            <h2>#Educação</h2>
                        </span>
                        </a><a href="/educacao">
                        <span class="peep-bio" >
                            <h2 style="font-size:4em;" >CEU Regina Rocco Casa</h2>
                            
                            <p>Somos o CEU Regina Rocco Casa, somos pessoal, estruturas e equipamentos cuidando do ensino e da formação de nossas crianças.</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="peep-wrapb"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/home/infra.png" alt="Infraestrutura">
                            <img class="peep-pic bottom" src="/img/home/infra2.png" alt="Infraestrutura">
                        </div>
                    </div>
                    <div class="g-6 cols">
                    <a href="/infraestrutura">
                        <span class="peep-name">
                            <h2>#Infraestrutura</h2>
                        </span>
                        </a>
                        <a href="/infraestrutura">
                        <span class="peep-bio">
                            <h2  style="font-size:4em;"> Nova Lions</h2>
                            
                            <p>Somos o combate às enchentes, as novas moradias, as vias modernizadas, somos realizações que promovem o desenvolvimento da cidade.</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="peep-wrapc"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                         <div class="fadie">
                            <img class="peep-pic top" src="/img/home/des.png" alt="#Desenvolvimento social">
                            <img class="peep-pic bottom" src="/img/home/des2.png" alt="#Desenvolvimento social">
                        </div>
                    </div>
                    <div class="g-6 cols">
                    <a href="/cidadania">
                        <span class="peep-name">
                            <h2>#Desenvolvimento social</h2>
                            
                            
                        </span>
                    </a><a href="/cidadania">
                        <span class="peep-bio">
                            <h2 style="font-size:4em;">CRAS Alvarenga</h2>
                           
                            <p>Somos o CRAS Alvarenga, somos programas, pessoal e estruturas que acolhem, protegem e incluem as pessoas.</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="peep-wrapd"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                         <div class="fadie">
                            <img class="peep-pic top" src="/img/home/meio.png" alt="#Meio ambiente">
                            <img class="peep-pic bottom" src="/img/home/meio2.png" alt="#Meio ambiente">
                        </div>
                    </div>
                    <div class="g-6 cols">
                        <a href="/meioambiente">
                        <span class="peep-name">
                            <h2>#Meio ambiente</h2>
                            
                        </span>
                        </a><a href="/meioambiente">
                        <span class="peep-bio">
                            <h2 style="font-size:4em;">Coleta seletiva</h2>
                            
                            <p>Somos a coleta seletiva, somos as ações de educação, preservação e respeito aos mananciais, ao verde e à vida.</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="peep-wrape"> 
                <div class="row">
                    <div class="g-6 cols reverse">
                        <div class="fadie">
                            <img class="peep-pic top" src="/img/home/esp.png" alt="#Esporte, cultura e lazer">
                            <img class="peep-pic bottom" src="/img/home/esp2.png" alt="#Esporte, cultura e lazer">
                        </div>
                    </div>
                    <div class="g-6 cols">
                    <a href="/esporte">
                        <span class="peep-name">
                            <h2>#Esporte, cultura e lazer</h2>
                        </span>
                    </a>
                    <a href="/esporte">
                        <span class="peep-bio">
                            <h2 style="font-size:4em;">Centro de Atletismo</h2>                            
                            <p>Somos ações como o Centro de Atletismo, o apoio ao esporte e a todas as manifestações culturais, somos as praças e os parques renovados.</p>
                        </span>
                        </a>    
                    </div>
                </div>
               </div>
        </section>
</div>
@endsection