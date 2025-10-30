/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
(function() {
    // === 1. DROPDOWN LOGIC ===
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

    const SCROLL_THRESHOLD = 20;  // Lowered threshold
    const SCROLL_DELTA = 5;      // Minimum scroll difference to trigger
    let lastScrollY = window.scrollY;
    let isScrolling = false;

    function updateHeader() {
        const currentScrollY = window.scrollY;
        const scrollDelta = Math.abs(currentScrollY - lastScrollY);

        // Add background when scrolled
        if (currentScrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Only process if scroll delta is significant
        if (scrollDelta < SCROLL_DELTA) {
            isScrolling = false;
            return;
        }

        // At top of page
        if (currentScrollY <= 0) {
            header.classList.remove('header--hidden');
        } 
        // Going down - hide header
        else if (currentScrollY > lastScrollY && currentScrollY > SCROLL_THRESHOLD) {
            header.classList.add('header--hidden');
            closeAll();
        }
        // Going up significantly - show header
        else if (currentScrollY < lastScrollY - SCROLL_DELTA * 2) {
            header.classList.remove('header--hidden');
        }

        lastScrollY = currentScrollY;
        isScrolling = false;
    }

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });

    // Optimized scroll handler with requestAnimationFrame
    window.addEventListener('scroll', () => {
        if (!isScrolling) {
            window.requestAnimationFrame(updateHeader);
            isScrolling = true;
        }
    }, { passive: true });
})();