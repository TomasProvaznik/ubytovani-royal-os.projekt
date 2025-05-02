// Funkce pro sticky navigaci při scrollování
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.header-navbar');
    const contactLine = document.querySelector('.header-contact-line');

    const contactBottom = contactLine.getBoundingClientRect().bottom;

    if (contactBottom <= 0) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});

// Hamburger menu funkcionalita
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navbar = document.querySelector('.header-navbar');
    const menuOverlay = document.querySelector('.menu-overlay');
    const dropdownItems = document.querySelectorAll('.dropdown-sign');
    const debugInfo = document.querySelector('.debug-info');
    
    // Funkce pro otevírání/zavírání hlavního menu
    hamburgerMenu.addEventListener('click', function() {
        hamburgerMenu.classList.toggle('active');
        navbar.classList.toggle('menu-open');
        menuOverlay.classList.toggle('active');
        
        // Zamezí scrollování stránky při otevřeném menu
        if (navbar.classList.contains('menu-open')) {
            document.body.style.overflow = 'hidden';
            // Pro debugging
            if (debugInfo) debugInfo.style.display = 'block';
            
            // Ujistíme se, že menu a jeho položky jsou viditelné
            const menuItems = navbar.querySelectorAll('ul > li');
            menuItems.forEach(item => {
                item.style.display = 'block';
                item.style.visibility = 'visible';
                const link = item.querySelector('a');
                if (link) {
                    link.style.display = 'block';
                    link.style.visibility = 'visible';
                }
            });
        } else {
            document.body.style.overflow = '';
            if (debugInfo) debugInfo.style.display = 'none';
        }
    });
    
    // Zavření menu při kliknutí na overlay
    menuOverlay.addEventListener('click', function() {
        hamburgerMenu.classList.remove('active');
        navbar.classList.remove('menu-open');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    // Funkce pro rozbalovací podmenu na mobilních zařízeních
    dropdownItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            // Pouze na mobilních zařízeních
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.classList.toggle('active');
                
                // Zavře ostatní otevřená podmenu
                dropdownItems.forEach(function(otherItem) {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
            }
        });
    });
    
    // Upravení velikosti okna
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            hamburgerMenu.classList.remove('active');
            navbar.classList.remove('menu-open');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
            
            // Odstraní všechny active třídy z dropdown menu
            dropdownItems.forEach(function(item) {
                item.classList.remove('active');
            });
        }
    });
});