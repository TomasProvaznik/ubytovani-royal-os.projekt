<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="fotogalerie.css" rel="stylesheet">
    <link href="kontakt.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Kontaktujte nás</title>
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

<section>
    <h1>Kontakty</h1>
    <div class="breadcrumb">
        <a href="index.php">Úvod</a>
        <span>></span>
        <a href="#kontakt" class="fotogalery-active">Kontakty</a>
    </div>

    <div class="contact-container">
        <div class="contact-box">
            <i class="fa-solid fa-phone-volume"></i>
            <span>+420 606 985 225</span>
        </div>
        <div class="contact-box">
            <i class="fa-solid fa-envelope"></i>
            <span>tomas.provaznik@spsehavirov.cz</span>
        </div>
        <div class="contact-box address-box">
            <div class="icon-container"><i class="fa-solid fa-location-dot"></i></div>
            <div class="address-content">
                <h3>Ubytování Royal</h3>
                <span>Spa hotel Lanterna, Leskové 659, 756 06 Velké Karlovice</span>
            </div>
        </div>
    </div>
</section>

        <?php
            include "footer.php";
        ?>
    <script src="navbar.js"></script>


</body>
</html>