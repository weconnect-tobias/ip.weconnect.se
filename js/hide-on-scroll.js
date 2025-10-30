/**
 * Döljer/visar header/navigering baserat på scroll-riktning (Hide-on-Scroll).
 */
document.addEventListener('DOMContentLoaded', function() {
    // Välj header-elementet
    const header = document.querySelector('header'); 
    
    if (!header) return; 

    const hideClass = 'header--hidden';
    let lastScrollY = 0; 
    let ticking = false; 

    function updateHeader() {
        const currentScrollY = window.scrollY;

        // Vi vill att funktionen ska aktiveras först när man scrollat förbi headern
        // För att undvika att headern döljs direkt vid laddning.
        if (currentScrollY > header.offsetHeight) { 
            
            if (currentScrollY > lastScrollY) {
                // Scrollar NER: Dölj menyn
                header.classList.add(hideClass);
            } else if (currentScrollY < lastScrollY) {
                // Scrollar UPP: Visa menyn
                header.classList.remove(hideClass);
            }
        } else {
            // Högst upp på sidan: Se till att menyn är synlig
            header.classList.remove(hideClass);
        }

        lastScrollY = currentScrollY;
        ticking = false;
    }

    // Använd requestAnimationFrame för optimal prestanda
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });

    // Initial körning
    updateHeader();
});