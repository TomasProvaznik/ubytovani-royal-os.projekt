<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Ubytování Royal</title>
</head>
<body>
    <header>
        <div class="header-contact-line">
            <div><i class="fa-solid fa-phone-volume"></i><a href="tel:606985225">606985225</a></div>
            <div><i class="fa-solid fa-envelope"></i><a href="mailto:tomasprovaznik7@seznam.cz">tomasprovaznik7@seznam.cz</a></div>
            <div><a href="">CZ</a></div>
        </div>
    <section class="header-background">
    <?php 
        include "navigation.php";
    ?>
    <div class="header-background-titlebox">
        <div>
        <span class="header-background-title">Ubytujte se v srdci Beskyd</span>
        </div>
        <div>
        <a href="" class="header-background-button">Rezervovat pokoj</a>
        </div>
    </div>
    </section>
    </header>

    <section class="rooms-section">
        <div class="room-image">
            <div class="room-overlay">
                <a href="standard-pokoj.php">Prohlédněte si pokoj standard</a>
            </div>
        </div>
        <div class="room-image">
            <div class="room-overlay">
                <a href="deluxe-pokoj.php">Prohlédněte si pokoj deluxe</a>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="service-item">
            <a href="sluzby.php">
                <i class="fa-solid fa-broom"></i>
                <div>Každodenní úklid</div>
            </a>
        </div>
        <div class="service-item">
            <a href="sluzby.php">
                <i class="fa-solid fa-paw"></i>
                <div>Péče o domácího mazlíčka</div>
            </a>
        </div>
        <div class="service-item">
            <a href="sluzby.php">
                <i class="fa-solid fa-wifi"></i>
                <div>Wifi zdarma</div>
            </a>
        </div>
        <div class="service-item">
            <a href="sluzby.php">
                <i class="fa-solid fa-clock"></i>
                <div>24h možnost komunikace</div>
            </a>
        </div>
        <div class="service-item">
            <a href="sluzby.php">
                <i class="fa-solid fa-car"></i>
                <div>Parkování zdarma</div>
            </a>
        </div>
    </section>

    <section class="features-section">
        <div class="feature-box">
            <h1>Tipy na výlety</h1>
            <div class="items-image">
                <a href="vylety.php">Nenechejte si ujít zážitky v okolí</a>
            </div>
        </div>
        <div class="feature-box">
            <h1>Galerie</h1>
            <div class="items-image">
                <a href="fotogalerie.php">Prohlédněte si naše ubytování</a>
            </div>
        </div>
        <div class="feature-box">
            <h1>Kontakt</h1>
            <div class="items-image">
                <a href="kontakt.php">Zjistěte více informací</a>
            </div>
        </div>
    </section>

    <?php 
        include "footer.php";
    ?>

    <script src="navbar.js"></script>

</body>
</html>