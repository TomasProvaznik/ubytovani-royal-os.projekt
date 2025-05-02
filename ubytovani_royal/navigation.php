<!-- Hamburger menu -->
<div class="hamburger-menu">
        <div class="hamburger-icon"></div>
        <div class="hamburger-icon"></div>
        <div class="hamburger-icon"></div>
    </div>
    
    <!-- Overlay pro mobilní zařízení -->
    <div class="menu-overlay"></div>
    
    <!-- Pro debugování -->
    <style>
    @media screen and (max-width: 768px) {
        .debug-info {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 10px;
            z-index: 9999;
            font-size: 12px;
            border-radius: 5px;
            display: none;
        }
    }
    </style>
    
    <nav class="header-navbar">
        <ul>
            <li class="dropdown-sign">
                <a href="" class="header-navbar-default womppp">pokoje<i class="fa-solid fa-caret-down"></i></a>
                <ul class="header-navbar-dropdown">
                    <li class="header-navbar-dropdown-item"><a href="standard-pokoj.php">Standard</a></li>
                    <li class="header-navbar-dropdown-item"><a href="deluxe-pokoj.php">Deluxe</a></li>
                </ul>
            </li>
            <li><a href="rezervace.php" class="header-navbar-default">rezervace</a></li>
            <li><a href="sluzby.php" class="header-navbar-default">služby</a></li>
            <li><a href="index.php" class="header-navbar-logo">Ubytování Royal</a></li>
            <li><a href="fotogalerie.php" class="header-navbar-default">Fotogalerie</a></li>
            <li><a href="vylety.php" class="header-navbar-default">Tipy na výlet</a></li>
            <li><a href="kontakt.php" class="header-navbar-default">Kontakt</a></li>
        </ul>
    </nav>