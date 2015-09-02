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
    <title>SOMOSSBC</title>
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
 <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
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
                   <li><a href="/">Home</a></li>
                    <li><a href="/saude">Saúde</a></li>
                    <li><a href="/educacao">Educação</a></li>
                    <li><a href="/cidadania">Social</a></li>
                    <li><a href="/infraestrutura">Infraestrutura</a></li>
                    <li><a href="/meioambiente">Meio Ambiente</a></li>
                    <li><a href="/esporte">Esporte</a></li>
                    <li><a href="/esporte">Cultura</a></li>
                    <li><a href="/esporte">Lazer</a></li>
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
            <h1 id="logo"> <div class="logocontainer"> <a href="/"> <span>#S</span> <span>O</span> <span>M</span> <span>O</span> <span>S</span> <span>S</span> <span>Ã</span> <span>O</span> <span> </span> <span>B</span> <span>E</span> <span>R</span> <span>N</span> <span>A</span> <span>R</span> <span>D</span> <span>O</span></a> 
             </div> </h1>
            <!-- Main Nav -->
            <nav role="navigation">
                <ul>
                    
                    <li><a href="/">Home</a></li>
                    <li><a href="/saude">Saúde</a></li>
                    <li><a href="/educacao">Educação</a></li>
                    <li><a href="/cidadania">Social</a></li>
                    <li><a href="/infraestrutura">Infraestrutura</a></li>
                    <li><a href="/meioambiente">Meio Ambiente</a></li>
                    <li><a href="/esporte">Esporte</a></li>
                   

                    <li style="padding-right:20px;">   </li>
                    <li><a href="http://www.saobernardo.sp.gov.br/home" title="Site da Prefeitura" ><i class="fa fa-globe"></i></a></li>
                    <li><a href="https://www.facebook.com/prefsbc" title="Facebook" target="_blank"><i class="icon icon-facebooks"></i></a></li>
                    <li><a href="https://twitter.com/@pref_sbc" title="Twitter" target="_blank"><i class="icon icon-twitters"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCDPNAIYv6IvCkCNiFGDPynw" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="http://instagram.com/#" title="Instagram" target="_blank"><i class="icon icon-instagram"></i></a></li>
                    <li>
                    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fprefsbc&amp;send=false&amp;layout=button_count&amp;width=103&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;locale=pt_BR" scrolling="no" frameborder="0" style="border:none; overflow:hidden; max-width:126px; height: 28px;padding-top: 8px;" allowtransparency="true">
                    </iframe>  
                             
                    </li>
            
            </ul>
            </nav>
        </div>
    </header>
 



    <!-- Main================================================== -->
    <main role="main">


    @yield('content')

    
    @include('contato.news')    
    </main>
  

    <!-- Footer================================================== -->
    <footer class="footer-main">
        <div class="row g-full">
            <nav class="btn-nav">
                <ul>
                    <li>
                        <div class="logocontainer">
                            <img src="{{ URL::asset('img/logo_footer.jpg') }}" alt="SomosSbc" />
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
                    <li><a href="https://plus.google.com/u/0/b/113442766031187118400/dashboard/overview" title="google plus" target="_blank"><i class="icon icon-googleplus"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- Le javascript================================================== -->

    <script src="{{ URL::asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scripts.min.js') }}"></script>
   
   
 
</body>

</html>
<!-- Dynamic page generated in 0.039 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2015-07-30 14:24:51 -->
<!-- super cache -->
