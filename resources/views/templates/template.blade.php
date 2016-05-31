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
    @yield('facebook')


    <link rel="stylesheet" href="/assets/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

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
<!-- Começa o body -->
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
    <!-- Le javascript -->
    <script type='text/javascript' src='/assets/js/jquery.js'></script>
    <script type='text/javascript' src='/assets/js/modernizr.js'></script>
    <script type='text/javascript' src='/assets/js/plugins.min.js'></script>
    <script type='text/javascript' src='/assets/js/scripts.min.js'></script>
</body>

</html>

