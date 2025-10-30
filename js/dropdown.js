/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
(function() {
    // === 1. DROPDOWN LOGIC ===
    const triggers = document.querySelectorAll('.has-dropdown');
    const header = document.querySelector('header');
    const closeAll = () => triggers.forEach(t => {
        t.parentElement.classList.remove('open');
        t.setAttribute('aria-expanded', 'false');
    });

    triggers.forEach(trigger => {
        trigger.addEventListener('click', e => {
            e.preventDefault();
            const isOpen = trigger.parentElement.classList.toggle('open');
            trigger.setAttribute('aria-expanded', isOpen);
        });
    });

    // === 2. HEADER SCROLL BEHAVIOR ===
    let lastScrollPosition = window.scrollY;
    let ticking = false;

    function handleScroll() {
        const currentScrollPosition = window.scrollY;
        
        // Lägg till scrolled-klass när vi inte är högst upp
        if (currentScrollPosition > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Hantera header synlighet
        if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 100) {
            // Scrollar nedåt och är inte högst upp
            header.classList.add('header-hidden');
            closeAll(); // Stäng dropdowns när headern döljs
        } else {
            // Scrollar uppåt eller är nära toppen
            header.classList.remove('header-hidden');
        }

        lastScrollPosition = currentScrollPosition;
        ticking = false;
    }

    // Optimera scroll-händelsen med requestAnimationFrame
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });
})();