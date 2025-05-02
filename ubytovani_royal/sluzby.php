<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="sluzby.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Služby</title>
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
            <div>
                <h1>Služby</h1>
                <h3>Jsme vám k službám - postaráme se o vaše pohodlí, abyste si pobyt u nás náležitě užili a nic vám nechybělo. Relaxujte, bavte se. Nebojte se na nás obrátit, rádi vám pomůžeme.</h3>
            </div>
            <div>
                <div>
                    <i class="fa-solid fa-broom"></i>
                    <h1>Každodenní úklid</h1>
                    <span>
                        V případě souhlasu Vám každý den nabízíme utření prachu, výměnu ručníků, vysátí a vytření pokoje.
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-paw"></i>
                    <h1>Váš mazlíček, náš pán</h1>
                    <span>
                        Za menší příplatek se rádi postaráme o vašeho domácího mazlíčka, zatímco budete na výletě nebo ponoření do práce.
                    </span>
                </div>
            </div>
            <div>
                <div>
                    <i class="fa-solid fa-wifi"></i>
                    <h1>Wifi zdarma</h1>
                    <span>
                        Po celém areálu je dostupná wifi, ideální pro plánování zážitků, psaní kamarádům nebo práci.
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-clock"></i>
                    <h1>Nonstop možnost komunikace</h1>
                    <span>
                        Při jakékoli poruše nebo Vašemu požadavku nás stačí kontaktovat a rádi se Vám budeme věnovat.
                    </span>
                </div>
            </div>
            <div>
                <div>
                    <i class="fa-solid fa-clover"></i>
                    <h1>Květiny do pokoje</h1>
                    <span>
                        Zajistíme květiny, kytice i květinovou výzdobu pokoje pro všechny příležitosti.
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-car"></i>
                    <h1>Parkování zdarma</h1>
                    <span>
                        Ke každému pokoji se také vztahuje jedno parkovací místo, které můžete libovolně využívat.
                    </span>
                </div>
            </div>
        </section>

        <div class="testimonails-help-div">
        <?php 
            include "testimonials.php";
        ?>
    </div>

        <?php
            include "footer.php";
        ?>
    <script src="navbar.js"></script>
    </body>

</html>