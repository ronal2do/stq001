<!DOCTYPE html>
<html lang="pt_BR">
<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <!-- Title and Meta================================================== -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
    <title>#somosSBC</title>
    <meta name="author" content="Somossbc">
    <meta name="description" content="Hotsite da campanha #somosSBC" />
    <meta name="keywords" content="#somossbc, saúde, educação, esporte, desenvolvimento social, infraestutura urbana, prefeitura de são bernardo do campo" />
    <meta content='Somossbc' name='copyright Prefeitura de São Bernardo do Campo'>
    <!-- Mobile================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale = 1, maximum-scale=1, user-scalable=no" />
    <!-- Fav and icons================================================== -->
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.ico">
    <!-- CSS & Js================================================== -->
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "http:\/\/s.w.org\/img\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {
                "concatemoji": "http:\/\/sotaquepropaganda.com.br\/somossbc\/assets\/js\/wp-emoji-release.min.js"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var c = b.createElement("canvas"),
                    d = c.getContext && c.getContext("2d");
                return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var f, g;
            c.supports = {
                simple: d("simple"),
                flag: d("flag")
            }, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.simple && c.supports.flag || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/fonts.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='canonical' href='#' />
   
    <script>
        function imgLoaded(img) {
            var imgWrapper = img.parentNode;
            imgWrapper.className += imgWrapper.className ? ' loaded' : 'loaded';
        };
    </script>
    @include('ga')
    @include('fb')

</head>



<!-- Começa o body                        -->



<body id="top" class="home page page-template page-template-homepage page-template-homepage-php">
@include('aw')
    <div class='mobile-nav-toggle right'>
        <a class='toggle' id='trigger-nav'>
            <div class='menubars'></div>
        </a>
    </div>
    <section class="mobile-nav-bg">
        <nav class='mobile-nav-links'>
             <ul>
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="{{ URL::route('welcome', '#realizacoes') }}">Realizações</a>
                    </li>
                    <li><a href="/videos">Vídeos</a>
                    </li>
                    <li><a href="/contato">Contato</a>
                    </li>
            </ul>
        </nav>
        <footer class="mobile-nav-footer">
            <nav>
                <ul>
                    <li><a href="https://www.facebook.com/prefsbc" target="_blank">Facebook</a>
                    </li>
                    <li><a href="https://twitter.com/@pref_sbc" target="_blank">Twitter</a>
                    </li>
                    <li><a href="http://instagram.com/#" target="_blank">Instagram</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </section>
    <header class="header-main">
        <div class="row">
            <!--- Logo -->
            <h1 id="logo"> <div class="logocontainer"> <a href="#"> <span>#S</span> <span>O</span> <span>M</span> <span>O</span> <span>S</span> <span>S</span> <span>Ã</span> <span>O</span> <span> </span> <span>B</span> <span>E</span> <span>R</span> <span>N</span> <span>A</span> <span>R</span> <span>D</span> <span>O</span> </a> </div> </h1>
            <!-- Main Nav -->
            <nav role="navigation">
                <ul>
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="{{ URL::route('welcome', '#realizacoes') }}">Realizações</a>
                    </li>
                    <li><a href="/videos">Vídeos</a>
                    </li>
                    <li><a href="/contato">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main role="main">
        <section id="sect-video" class="sect-masthead v-center center-all js-height">
            <div id="bgVideo" class="bg-vid" style="background:url(img/home/somossbc.jpg); "></div>
            <div>
                <div class="row intro">
                <img src="img/somos.png" style="width:75%;" alt="#somossbc">
                    <hr class="sep"  />
                    <h4>Uma cidade cada vez melhor de se viver</h4>
                    <br />
                    <div>      
                        <a href="https://www.facebook.com/prefsbc"><img src="img/social.png" style="width:40px;"  alt="#somossbc"></a>
                        <a href="https://twitter.com/@pref_sbc"><img src="img/social2.png" style="width:40px;"  alt="#somossbc"></a>
                        <a href=""><img src="img/social3.png" style="width:39px;"  alt="#somossbc"></a>
                        <a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw"><img src="img/social4.png" style="width:40px;"  alt="#somossbc"></a>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="overlay alpha"></div>
        </section>

        <section class="sect-intro intro-work" style="background-color: #F6ACB3;">
            <div class="row g-full">
                <header>
                    <h2 style="color:#fff;">Uma cidade cada vez melhor de se viver <br/></h2>
                    <hr class="sep" style="color:#fff;"/>
                    <p style="color:#fff;">Somos a participação que faz o hoje e o amanhã <br />
                    Somos obras e programas que promovem avanços,<br /> transformam vidas e ainda com muitas histórias por contar.</p>
                </header>
            </div>
        </section>
        <div class="culture center-all">
        <section id="realizacoes" class="sect-work sect-peeps bg-white" >                                   
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
        @include('contato.news')
       
    </main>
    <!-- Footer================================================== -->
    <footer class="footer-main">
        <div class="row g-full">
            <nav class="btn-nav">
                <ul>
                    <li>
                        <div class="logocontainer">
                            <img src="img/logo_footer.jpg" alt="SomosSbc" />
                        </div>
                    </li>
                </ul>
            </nav>
            <aside></aside>
            <nav>
                <ul class="social">
                    <li><a href="https://twitter.com/@pref_sbc" title="Twitter" target="_blank"><i class="icon icon-twitters"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/prefsbc" title="Facebook" target="_blank"><i class="icon icon-facebooks"></i></a>
                    </li>
                    <li><a href="http://instagram.com/#" title="Instagram" target="_blank"><i class="icon icon-instagram"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/+#" title="google plus" target="_blank"><i class="icon icon-googleplus"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- Le javascript================================================== -->
    <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/modernizr.js'></script>
    <script type='text/javascript' src='assets/js/plugins.min.js'></script>
    <script type='text/javascript' src='assets/js/scripts.min.js'></script>
</body>

</html>

