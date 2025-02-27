@extends('websitelayout.layout')

@section('paintings','active')
@section('title',"")
@section('content')
    <div><h1 class="name"> Schilderijen</h1>
        <p class="text">
            Hieronder vindt u mijn collectie schilderijen.
            Door op een schilderij te klikken, vindt u meer informatie over dit schilderij, zoals formaat, materiaal en
            prijs.
        </p>
        <p class="textp">
            Bent u geïnteresseerd in een schilderij en/of wilt u meer informatie ontvangen, dan kunt u mij <a class="mailen" href="mailto:info@ingridtenlande.nl">mailen</a>.
        </p>
    </div>

    <div class="gallery">
        <a href="/paintings/channel">
            <img class="painting-channel" src="/pictures/schilderijen/channel.jpg" alt="Channel">
        </a>
        <a href="/paintings/victor">
            <img loading="lazy" class="painting-victor" src="/pictures/schilderijen/victor.jpg" alt="victor">
        </a>
        <a href="/paintings/nathalie">
            <img loading="lazy" class="painting-nathalie" src="/pictures/schilderijen/nathalie.jpg" alt="Nathalie">
        </a>

        <a href="/paintings/erena">
            <img loading="lazy" class="painting-erena" src="/pictures/schilderijen/erena.jpg" alt="Erena">
        </a>
        <a href="/paintings/valerie">
            <img class="painting-valerie" src="/pictures/schilderijen/valerie.jpg" alt="Valerie">
        </a>
        <a href="/paintings/kane">
            <img loading="lazy" class="painting-kane" src="/pictures/schilderijen/kane.jpg" alt="Kane">
        </a>

        <a href="/paintings/yasmine">
            <img loading="lazy" class="painting-yasmine" src="/pictures/schilderijen/yasmine.jpg" alt="yasmine">
        </a>
        <a href="/paintings/lois">
            <img loading="lazy" class="painting-lois" src="/pictures/schilderijen/lois.jpg" alt="Lois">
        </a>
        <a href="/paintings/sadé">
            <img loading="lazy" class="painting-sadé" src="/pictures/schilderijen/sadé.JPG" alt="Sadé">
        </a>
        <a href="/paintings/hélène">
            <img class="painting-hélène" src="/pictures/schilderijen/hèléne.jpeg" alt="Hèlène">
        </a>
        <a href="/paintings/malu">
            <img loading="lazy" class="painting-malu" src="/pictures/schilderijen/malu-paintings.JPG" alt="Malu">
        </a>
        <a href="/paintings/laila">
            <img loading="lazy" class="painting-laila" src="/pictures/schilderijen/laila.jpg" alt="Laila">
        </a>

        <a href="/paintings/suzan">
            <img loading="lazy" class="painting-suzan" src="/pictures/schilderijen/suzan.jpg" alt="Suzan">
        </a>
        <a href="/paintings/naomi">
            <img loading="lazy" class="painting-naomi" src="/pictures/schilderijen/naomi.jpg" alt="Naomi">
        </a>

        <a href="/paintings/merel">
            <img class="painting-merel" src="/pictures/schilderijen/merel.jpg" alt="Merel">
        </a>
{{--        <a href="/paintings/asha">--}}
{{--            <img loading="lazy" class="painting-asha" src="/pictures/schilderijen/asha.jpg">--}}
{{--        </a>--}}
        <a href="/paintings/lena">
            <img loading="lazy" class="painting-lena" src="/pictures/schilderijen/lena.jpg" alt="Lena">
        </a>
{{--        <a href="/paintings/esila">--}}
{{--            <img loading="lazy" class="painting-esila" src="/pictures/schilderijen/esila.jpg">--}}
{{--        </a>--}}
        <a href="/paintings/jannes">
            <img class="painting-jannes" src="/pictures/schilderijen/jannes.jpg" alt="Jannes">
        </a>
        <a href="/paintings/abby">
            <img loading="lazy" class="painting-abby" src="/pictures/schilderijen/abby.jpg" alt="Abby">
        </a>
        <a href="/paintings/tom">
            <img loading="lazy" class="painting-tom" src="/pictures/schilderijen/tom.jpg" alt="Tom">
        </a>
        <a href="/paintings/zara">
            <img class="painting-zara" src="/pictures/schilderijen/zara.jpg" alt="Zara">
        </a>
        <a href="/paintings/lanah">
            <img loading="lazy" class="painting-lanah" src="/pictures/schilderijen/lanah.jpg" alt="Lanah">
        </a>
        <a href="/paintings/farah">
            <img loading="lazy" src="/pictures/schilderijen/farah.jpg" alt="Farah">
        </a>
        <a href="/paintings/lorena">
            <img loading="lazy" src="/pictures/schilderijen/lorena.jpg" alt="Lorena">
        </a>
        <a href="/paintings/heather">
            <img loading="lazy" src="/pictures/schilderijen/heather.jpg" alt="Heather">
        </a>
    </div>
@endsection
