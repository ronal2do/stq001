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
    <title>somossbc</title>
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

    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/fonts.min.css">
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
                    @include('templates.menu')
            </ul>
        </nav>
        <footer class="mobile-nav-footer">
            <nav>
                <ul>
                    @include('templates.social')
                    
                </ul>
            </nav>
        </footer>
    </section>
@include('templates.header')

    <main role="main">
        @yield('content')

        @include('contato.news')

        @include('templates.footer')
        
    </main>
    <!-- Le javascript================================================== -->
    <script type='text/javascript' src='/assets/js/jquery.js'></script>
    <script type='text/javascript' src='/assets/js/modernizr.js'></script>
    <script type='text/javascript' src='/assets/js/plugins.min.js'></script>
    <script type='text/javascript' src='/assets/js/scripts.min.js'></script>
</body>

</html>

