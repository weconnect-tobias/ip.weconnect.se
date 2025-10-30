/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
(function() {
    // === 1. DROPDOWN LOGIK ===
    const triggers = document.querySelectorAll('.has-dropdown');
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
    const header = document.querySelector('header');
    if (!header) return;

    const SCROLL_THRESHOLD = 50; // Börja dölj efter 50px scroll
    let lastScrollY = window.scrollY;
    let ticking = false;
    let scrollTimer = null;
    let isHeaderVisible = true;

    function updateHeader() {
        const currentScrollY = window.scrollY;
        const scrollingDown = currentScrollY > lastScrollY;
        const scrollDelta = Math.abs(currentScrollY - lastScrollY);

        // Only react to significant scroll changes
        if (scrollDelta < 5) {
            ticking = false;
            return;
        }

        // Aktivera headerdöljning efter tröskelvärdet
        if (currentScrollY > SCROLL_THRESHOLD) {
            if (scrollingDown && isHeaderVisible) {
                requestAnimationFrame(() => {
                    header.classList.add('header--hidden');
                    closeAll(); // Stäng dropdowns när headern döljs
                    isHeaderVisible = false;
                });
            } else if (!scrollingDown && !isHeaderVisible) {
                requestAnimationFrame(() => {
                    header.classList.remove('header--hidden');
                    isHeaderVisible = true;
                });
            }
        } else if (!isHeaderVisible) {
            requestAnimationFrame(() => {
                header.classList.remove('header--hidden');
                isHeaderVisible = true;
            });
        }

        lastScrollY = currentScrollY;
        ticking = false;
    }

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeAll();
            header.classList.remove('header--hidden');
            isHeaderVisible = true;
        }
    });

    // Scroll handler with debounce and requestAnimationFrame
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                updateHeader();
                ticking = true;
            });
        }

        // Clear existing timer
        if (scrollTimer) {
            clearTimeout(scrollTimer);
        }

        // Set new timer
        scrollTimer = setTimeout(() => {
            // När scrollningen stannar, visa headern om vi är nära toppen
            if (window.scrollY < SCROLL_THRESHOLD) {
                header.classList.remove('header--hidden');
                isHeaderVisible = true;
            }
        }, 150); // Vänta 150ms efter att scrollningen stannat
    }, { passive: true });

    // Initialize
    updateHeader();
})();