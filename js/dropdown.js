/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
(function() {
    // === 1. DROPDOWN LOGIK ===
    const triggers = document.querySelectorAll('.has-dropdown');
    const closeAll = () => triggers.forEach(t => {t.parentElement.classList.remove('open');t.setAttribute('aria-expanded','false');});

    triggers.forEach(trigger => {
        trigger.addEventListener('click', e => {
            e.preventDefault();
            const isOpen = trigger.parentElement.classList.toggle('open');
            trigger.setAttribute('aria-expanded', isOpen);
        });
    });

    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });

    // === 2. HIDE-ON-SCROLL LOGIK ===
    const header = document.querySelector('header');
    
    if (!header) return; 

    // ✅ NYCKELÄNDRING: Beräkna höjden en gång vid laddning (Fixar Forced Reflow)
    const headerHeight = header.offsetHeight; 

    const hideClass = 'header--hidden';
    let lastScrollY = 0;
    let ticking = false; // För prestandaoptimering

    function updateHeader() {
        const currentScrollY = window.scrollY;

        // Använder den förberäknade headerHeight istället för att tvinga en ny layout.
        if (currentScrollY > headerHeight) { 
            
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

    // Använd requestAnimationFrame för optimal prestanda vid scroll
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });

    // Initial körning
    updateHeader();

})();