/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
(function() {
    'use strict';

    // === 1. UTILITIES ===
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // === 2. DROPDOWN LOGIC ===
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

    // === 3. HEADER SCROLL BEHAVIOR ===
    let lastScroll = window.pageYOffset || document.documentElement.scrollTop;
    let scrollDirection = 'up';
    let lastScrollTime = Date.now();

    const SCROLL_THRESHOLD = 50;
    const SCROLL_TIMEOUT = 150;

    function updateHeader() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const scrolled = currentScroll > 10;
        
        // Uppdatera bakgrundsfärg
        header.classList.toggle('scrolled', scrolled);

        // Bestäm scroll-riktning och hantera header-synlighet
        if (Math.abs(currentScroll - lastScroll) > SCROLL_THRESHOLD) {
            const now = Date.now();
            if (now - lastScrollTime > SCROLL_TIMEOUT) {
                scrollDirection = currentScroll > lastScroll ? 'down' : 'up';
                lastScrollTime = now;

                if (scrollDirection === 'down' && currentScroll > 100) {
                    if (!header.classList.contains('header-hidden')) {
                        header.classList.add('header-hidden');
                        closeAll();
                    }
                } else if (scrollDirection === 'up' || currentScroll <= 100) {
                    header.classList.remove('header-hidden');
                }
            }
        }

        lastScroll = currentScroll;
    }

    // Optimerad scroll-hantering
    const debouncedScroll = debounce(updateHeader, 10);
    
    window.addEventListener('scroll', () => {
        window.requestAnimationFrame(debouncedScroll);
    }, { passive: true });

    // Hantera touch-enheter
    let touchStart = 0;
    window.addEventListener('touchstart', e => {
        touchStart = e.touches[0].pageY;
    }, { passive: true });

    window.addEventListener('touchmove', e => {
        const touchEnd = e.touches[0].pageY;
        const diff = touchStart - touchEnd;

        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                // Scrollar upp
                header.classList.add('header-hidden');
                closeAll();
            } else {
                // Scrollar ner
                header.classList.remove('header-hidden');
            }
            touchStart = touchEnd;
        }
    }, { passive: true });

    // Initial state
    updateHeader();

    // Reset header position on page load/refresh
    window.addEventListener('beforeunload', () => {
        header.classList.remove('header-hidden');
    });
})();

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });
})();