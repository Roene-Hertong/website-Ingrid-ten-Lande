<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')Ingridtenlande</title>
    @vite(['resources/css/schilderijen.css'])
    @vite(['resources/js/schilderijen.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="kunstenares Ingrid Hertong">
</head>
<header>
    <div>
        <a class="return" href="/paintings">
            Terug naar overzicht
        </a>
    </div>
</header>

<main>
    <div class="wrapper">
        <div class="content">
            @yield('content')
            <div class="contact-button">
                <a class="contact-button-text" href="mailto:info@ingridtenlande.nl">
                    NEEM CONTACT MET MIJ OP
                    <svg class="paintings-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</main>
<footer class="footer-padding">

    &copy; copyright 2025 Ingrid ten Lande / Realisatie door
    <a class="portfolio-link" href="https://roene-hertong.newdeveloper.nl/">Roene Hertong </a>
</footer>
