<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="fotogalerie.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Fotogalerie - Ubytování Royal</title>
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


    <main class="gallery-page">

        <section id="pokoje" class="gallery-section">
            <h1 class="gallery-title">Fotogalerie našich pokojů</h1>
            
            <div class="breadcrumb">
                <a href="index.php">Úvod</a>
                <span>></span>
                <a href="fotogalerie.php">Fotogalerie</a>
                <span>></span>
                <a href="#pokoje" class="fotogalery-active">Pokoje</a>
            </div>

            <div class="room-gallery">

                <div class="room-section">
                    <h1>Pokoj standard</h1>

                    <div class="gallery-container">
                        <div class="gallery-item" onclick="openLightbox('fotogalerie1.webp', 'Pokoj standard - ložnice')">
                            <img src="fotogalerie1.webp" alt="Pokoj standard - obývací pokoj">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie2.webp', 'Pokoj standard - koupelna')">
                            <img src="fotogalerie2.webp" alt="Pokoj standard - koupelna">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie3.webp', 'Pokoj standard - výhled')">
                            <img src="fotogalerie3.webp" alt="Pokoj standard - výhled">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie4.webp', 'Pokoj standard - snídaně')">
                            <img src="fotogalerie4.webp" alt="Pokoj standard - ložnice">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie5.webp', 'Pokoj standard - TV')">
                            <img src="fotogalerie5.webp" alt="Pokoj standard - koupelna">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie6.webp', 'Pokoj standard - detail')">
                            <img src="fotogalerie6.webp" alt="Pokoj standard - kuchyň">
                        </div>
                    </div>

                    <form action="movement.php" method="post">
                        <input type="hidden" name="pokoj" value="1">
                        <input type="submit" name="submitMove" value="Detaily pokoje" class="room-detail-btn">
                    </form>
                </div>

                <div class="room-section">
                    <h1>Pokoj deluxe</h1>

                    <div class="gallery-container">
                        <div class="gallery-item" onclick="openLightbox('fotogalerie7.webp', 'Pokoj deluxe - ložnice')">
                            <img src="fotogalerie7.webp" alt="Pokoj deluxe - jídelna">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie8.webp', 'Pokoj deluxe - koupelna')">
                            <img src="fotogalerie8.webp" alt="Pokoj deluxe - ložnice">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie9.webp', 'Pokoj deluxe - výhled')">
                            <img src="fotogalerie9.webp" alt="Pokoj deluxe - TV">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie10.webp', 'Pokoj deluxe - snídaně')">
                            <img src="fotogalerie10.webp" alt="Pokoj deluxe - chodba">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie11.webp', 'Pokoj deluxe - TV')">
                            <img src="fotogalerie11.webp" alt="Pokoj deluxe - koupelna">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('fotogalerie12.webp', 'Pokoj deluxe - detail')">
                            <img src="fotogalerie12.webp" alt="Pokoj deluxe - kuchyň">
                        </div>
                    </div>

                    <form action="movement.php" method="post">
                        <input type="hidden" name="pokoj" value="2">
                        <input type="submit" name="submitMove" value="Detaily pokoje" class="room-detail-btn">
                    </form>
                </div>
            </div>
        </section>

        <section id="beskydy" class="gallery-section">
            <h1 class="gallery-title">Fotogalerie našeho okolí</h1>
            
            <div class="breadcrumb">
                <a href="index.php">Úvod</a>
                <span>></span>
                <a href="fotogalerie.php">Fotogalerie</a>
                <span>></span>
                <a href="#beskydy" class="fotogalery-active">Okolí</a>
            </div>

            <h1 class="section-title">Okolí penzionu</h1>

            <div class="gallery-container beskydy-gallery">
                <div class="gallery-item" onclick="openLightbox('fotogalerie13.webp', 'Velké Karlovice')">
                    <img src="fotogalerie13.webp" alt="Velké Karlovice">
                    <div class="gallery-caption">Velké Karlovice</div>
                </div>
                <div class="gallery-item" onclick="openLightbox('fotogalerie14.webp', 'Panorama Velké Karlovice')">
                    <img src="fotogalerie14.webp" alt="Panorama Velké Karlovice">
                    <div class="gallery-caption">Panorama Velké Karlovice</div>
                </div>
                <div class="gallery-item" onclick="openLightbox('fotogalerie15.webp', 'Lysá hora')">
                    <img src="fotogalerie15.webp" alt="Lysá hora">
                    <div class="gallery-caption">Lysá hora</div>
                </div>
                <div class="gallery-item" onclick="openLightbox('fotogalerie16.webp', 'Panorama Velké Karlovice')">
                    <img src="fotogalerie16.webp" alt="Panorama Velké Karlovice">
                    <div class="gallery-caption">Panorama Velké Karlovice</div>
                </div>
                <div class="gallery-item" onclick="openLightbox('fotogalerie17.webp', 'Velké Karlovice')">
                    <img src="fotogalerie17.webp" alt="Velké Karlovice">
                    <div class="gallery-caption">Velké Karlovice</div>
                </div>
                <div class="gallery-item" onclick="openLightbox('fotogalerie18.webp', 'Ubytování Royal v zimě')">
                    <img src="fotogalerie18.webp" alt="Ubytování Royal v zimě">
                    <div class="gallery-caption">Ubytování Royal v zimě</div>
                </div>
            </div>
        </section>

        <?php
            include "testimonials.php";
        ?>

    </main>

    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <div class="lightbox-content">
            <span class="lightbox-close">&times;</span>
            <img id="lightbox-img" src="" alt="">
            <div id="lightbox-caption" class="lightbox-caption"></div>
        </div>
    </div>

    <?php 
        include "footer.php";
    ?>

    <script src="navbar.js"></script>

    <script>
        function openLightbox(imageSrc, caption) {
            document.getElementById("lightbox-img").src = "" + imageSrc;
            document.getElementById("lightbox-caption").innerText = caption;
            document.getElementById("lightbox").classList.add("active");
            document.body.style.overflow = "hidden";
        }

        function closeLightbox() {
            document.getElementById("lightbox").classList.remove("active");
            document.body.style.overflow = "auto";
        }

        document.addEventListener("keydown", function(event) {
            if (event.key === "Escape") {
                closeLightbox();
            }
        });
    </script>
</body>
</html>