<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="pokoj.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Pokoj - Deluxe</title>
</head>
<body>
    
<div class="header-contact-line">
            <div><i class="fa-solid fa-phone-volume"></i><a href="tel:606985225">606985225</a></div>
            <div><i class="fa-solid fa-envelope"></i><a href="mailto:tomasprovaznik7@seznam.cz">tomasprovaznik7@seznam.cz</a></div>
            <div><a href="">CZ</a></div>
        </div>

    <?php 
        include "navigation.php";
    ?>

    <section class="hero-section-deluxe">
        <div class="hero-content">
            <h1>Pokoj Deluxe</h1>
            <h3>Apartmán s veškerým vybavením a elegantním designem / 2. patro</h3>
            <div class="hero-buttons">
                <a href="rezervace.php" class="hero-btn">Rezervovat pokoj</a>
                <a href="sluzby.php" class="hero-btn">Služby</a>
            </div>
        </div>
    </section>

    <section class="description-section">
        <h1> Deluxe apartmán – Styl, prostor a pohodlí v jednom</h1>
        <div>
        Vítejte v našem Deluxe apartmánu, který propojuje elegantní design, moderní vybavení a maximální komfort. Tento exkluzivní pokoj je navržen tak, aby uspokojil i ty nejnáročnější hosty – ideální volba pro romantické pobyty, víkendový únik z města nebo stylovou pracovní cestu.
        Apartmán vás okouzlí prostorným obývacím pokojem s velkorysou sedací soupravou, chytrou TV a promyšleným osvětlením, které dodává interiéru sofistikovaný nádech. Designová ložnice s výraznou tapetou a pohodlnou manželskou postelí vytváří atmosféru pro dokonalý odpočinek.
        K dispozici je také plně vybavená kuchyně s moderními spotřebiči, stylová jídelna s pohodlným sezením a luxusní koupelna, kde si užijete relaxaci v elegantním prostředí. Celý prostor je laděn do harmonických tónů, s důrazem na detail, pohodlí a nadčasový styl.
        </div>
    </section>

    <section class="image-carousel">
        <button class="arrow left">&#10094;</button>

        <div class="carousel-track-container">
            <div class="carousel-track">
                <img src="fotogalerie7.webp" class="carousel-image" alt="Interiér pokoje Standard">
                <img src="fotogalerie8.webp" class="carousel-image" alt="Výhled z pokoje">
                <img src="fotogalerie9.webp" class="carousel-image" alt="Koupelna s vanou">
                <img src="fotogalerie10.webp" class="carousel-image" alt="Ložnice s manželskou postelí">
                <img src="fotogalerie11.webp" class="carousel-image" alt="Terasa s posezením">
                <img src="fotogalerie12.webp" class="carousel-image" alt="Obývací prostor">
            </div>
        </div>

        <button class="arrow right">&#10095;</button>
    </section>

    <section class="features-section">
        <h3>Vlastnosti a vybavení</h3>
        <table class="features-table">
            <tr>
                <th>Místnost</th>
                <th>Popis / Vybavení</th>
            </tr>
            <tr>
                <td>Ložnice</td>
                <td>Manželská postel, výrazná designová tapeta, noční osvětlení</td>
            </tr>
            <tr>
                <td>Obývací prostor</td>
                <td>Velká rohová sedačka, konferenční stolek, chytrá TV, designové prvky</td>
            </tr>
            <tr>
                <td>Kuchyň</td>
                <td>Plně vybavená (lednice, varná deska, trouba, digestoř, nádobí)</td>
            </tr>
            <tr>
                <td>Jídelna</td>
                <td>Komfortní sezení pro 4 osoby, stylový stůl a židle</td>
            </tr>
            <tr>
                <td>Koupelna</td>
                <td>Moderní umyvadlo, prostorná vana nebo sprcha, kvalitní sanitární vybavení</td>
            </tr>
            <tr>
                <td>Vybavení</td>
                <td>Wi-Fi, TV, indukční varná deska, základní kuchyňské potřeby</td>
            </tr>
        </table>
    <div class="testimonails-help-div">
        <?php 
            include "testimonials.php";
        ?>
    </div>

    </section>

        <?php
            include "footer.php";
        ?>
    <script src="karusel.js"></script>
    <script src="navbar.js"></script>

</body>
</html>