<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>You Have Been Campbelled</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]>{!! Theme::script('js/ie/html5shiv.js') !!}<![endif]-->
    {!! Theme::style('css/main.css') !!}
    <!--[if lte IE 9]>{!! Theme::style('css/ie9.css') !!}<![endif]-->
    <!--[if lte IE 8]>{!! Theme::style('css/ie8.css') !!}<![endif]-->
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
<!--[if lte IE 8]>{!! Theme::script('js/ie/respond.min.js') !!}<![endif]-->
{!! Theme::script('js/main.js') !!}
@yield('scripts')
</body>
</html>
