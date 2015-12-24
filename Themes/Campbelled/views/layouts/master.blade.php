<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>You Have Been Campbelled</title>
    <meta name="description" content="{{ setting('core::site-description') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="You Have Been Campbelled" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://campbelled.club" />
    <meta property="og:description" content="This site regroups all friendly comments from Graham Campbell" />
    <!--[if lte IE 8]>{!! Theme::script('js/ie/html5shiv.js') !!}<![endif]-->
    {!! Theme::style('css/main.css') !!}
    <!--[if lte IE 9]>{!! Theme::style('css/ie9.css') !!}<![endif]-->
    <!--[if lte IE 8]>{!! Theme::style('css/ie8.css') !!}<![endif]-->
    @yield('styles')
</head>
<body>
<div id="wrapper">
    <header id="header">
        <h1><a href="#">{{ setting('core::site-name') }}</a></h1>
        <nav class="links">
            <ul>
            </ul>
        </nav>
        <nav class="main">
            <ul>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">
        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Lorem ipsum</h3>
                        <p>Feugiat tempus veroeros dolor</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Dolor sit amet</h3>
                        <p>Sed vitae justo condimentum</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Feugiat veroeros</h3>
                        <p>Phasellus sed ultricies mi congue</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Etiam sed consequat</h3>
                        <p>Porta lectus amet ultricies</p>
                    </a>
                </li>
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions vertical">
                <li><a href="#" class="button big fit">Log In</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">
        @yield('content')
    </div>
    @include('partials.sidebar')
</div>

<!-- Scripts -->
{!! Theme::script('js/jquery.min.js') !!}
{!! Theme::script('js/skel.min.js') !!}
{!! Theme::script('js/util.js') !!}
{!! Theme::script('js/jquery.scrollTo.min.js') !!}
{!! Theme::script('js/jquery.localScroll.min.js') !!}
<!--[if lte IE 8]>{!! Theme::script('js/ie/respond.min.js') !!}<![endif]-->
{!! Theme::script('js/main.js') !!}
@yield('scripts')
<?php if (Setting::has('core::google-analytics') && App::environment() !== 'local'): ?>
{!! setting('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>
