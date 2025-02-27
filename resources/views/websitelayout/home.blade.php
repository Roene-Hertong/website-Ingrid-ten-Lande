@extends('websitelayout.layout')

@section('title',"")
@section("homeActive","active")

@section('content')
    <div class="home-flex">
        <div class="context mobile-content-home">
            <div>
                <h1 class="name"> Ingrid ten Lande </h1>
                <p> Vanaf mijn zestiende ben ik begonnen met schilderen. Geïnspireerd door mijn opa, die ook schilderde,
                    ben
                    ik begonnen met olieverf. Na een lange periode waarin ik niet heb geschilderd, ben ik toch weer
                    begonnen
                    met schilderen. Niet meer met olieverf maar nu met acrylverf. De heldere kleuren en het snelle
                    werken
                    trokken mij in dit materiaal erg aan.</p>
                <p>
                    Ik hou van de kleuren in mijn schilderijen en zie deze kleuren ook veel om mij heen in de prachtige
                    natuur. De natuur is hierdoor een inspiratiebron voor mij geworden. Net als de natuur heeft ieder
                    mens
                    ook prachtige kleuren die de unieke (karakter)eigenschappen en talenten van ieder persoon
                    weerspiegelen. </p>
            </div>
            <div class="paintings-button">
                <a class="paintings-button-text" href="/paintings">BEKIJK MIJN WERK
                    <svg class="paintings-button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                    </svg>
                </a>
            </div>
            <div class="contact-context">
                <p> Wilt u contact met mij opnemen dit kan door op onderstaande knop te drukken.</p>

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
        <div class="mobile-picture-ingrid image-container">
            <img class="picture-ingrid" src="pictures/foto-ingrid.webp" alt="Ingrid Hertong">
        </div>
    </div>

@endsection

