<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="pokoj.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Pokoj - Standard</title>
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

    <section class="hero-section">
        <div class="hero-content">
            <h1>Pokoj Standard</h1>
            <h3>Pokoj s veškerým vybavením a terasou / 2. patro</h3>
            <div class="hero-buttons">
                <a href="rezervace.php" class="hero-btn">Rezervovat pokoj</a>
                <a href="sluzby.php" class="hero-btn">Služby</a>
            </div>
        </div>
    </section>

    <section class="description-section">
        <h1>Stylové horské ubytování s dechberoucím výhledem a moderním interiérem</h1>
        <div>
            Užijte si komfort a klid v našem útulném apartmánu, který spojuje přírodní materiály s moderním designem. Interiér zaujme dřevěnými stropy, kamennými detaily a kvalitním vybavením – od prostorného obývacího pokoje až po dvě designové koupelny s vanou i sprchou. Plně vybavená kuchyň a jídelní kout poskytují vše potřebné pro pohodlný pobyt.
            Vydechněte si na prostorné terase s výhledem na okolní hory – ideální pro ranní kávu i večerní sklenku vína. Klidná lokalita, stylové zařízení a důraz na detail dělají z tohoto ubytování perfektní volbu pro romantický víkend, rodinnou dovolenou i pracovní únik z města.
        </div>
    </section>

    <section class="image-carousel">
        <button class="arrow left">&#10094;</button>

        <div class="carousel-track-container">
            <div class="carousel-track">
                <img src="fotogalerie1.webp" class="carousel-image" alt="Interiér pokoje Standard">
                <img src="fotogalerie2.webp" class="carousel-image" alt="Výhled z pokoje">
                <img src="fotogalerie3.webp" class="carousel-image" alt="Koupelna s vanou">
                <img src="fotogalerie4.webp" class="carousel-image" alt="Ložnice s manželskou postelí">
                <img src="fotogalerie5.webp" class="carousel-image" alt="Terasa s posezením">
                <img src="fotogalerie6.webp" class="carousel-image" alt="Obývací prostor">
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
                <td>1 prostorná ložnice s manželskou postelí</td>
            </tr>
            <tr>
                <td>Koupelny</td>
                <td>2 moderní koupelny – sprchový kout, volně stojící vana, 2 umyvadla</td>
            </tr>
            <tr>
                <td>Obývací pokoj</td>
                <td>Pohodlné posezení, TV, jídelní kout, přímý vstup na terasu</td>
            </tr>
            <tr>
                <td>Kuchyň</td>
                <td>Plně vybavená – lednice, sporák, trouba, varná konvice, nádobí, jídelní stůl</td>
            </tr>
            <tr>
                <td>Exteriér</td>
                <td>Prostorná terasa s výhledem na hory, venkovní posezení</td>
            </tr>
            <tr>
                <td>Spotřebiče</td>
                <td>TV se satelitními programy, mikrovlnná trouba, rychlovarná konvice, lednička</td>
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