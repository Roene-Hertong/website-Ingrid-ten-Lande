<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')Ingridtenlande</title>
    @vite(['resources/css/website-ingrid.css'])
    @vite(['resources/js/website-ingrid.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="kunstenares Ingrid Hertong">
    <link rel="icon" type="image/x-icon" href="pictures/Achtergrond tubes.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">

</head>
<body>

<header>


    <nav>
        <div id="menuButton" class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="hamburger" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#000000"
                      d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
            </svg>
        </div>
            <ul class="navbar" id="mobile-menu">
                <li><a class="nav @yield('home')" href="/">HOME</a></li>
                <li><a class="nav @yield('about')" href="about-ingrid">OVER INGRID</a></li>
                <li><a class="nav @yield('paintings')" href="paintings">SCHILDERIJEN</a></li>
                <li><a class="nav @yield('expo')" href="exposities">EXPOSITIES</a></li>
            </ul>
    </nav>

</header>

<main>
    @yield('content')
</main>
<footer>

    &copy; Copyright 2025 Ingrid ten Lande / Realisatie door
    <a class="portfolio-link" target="_blank" href="https://roene-hertong.newdeveloper.nl/">Roene Hertong</a>
    <p> test test test</p>
</footer>
</body>
