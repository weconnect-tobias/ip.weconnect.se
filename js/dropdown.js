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

    const SCROLL_THRESHOLD = 50;
    let lastScrollY = window.scrollY;
    let isScrolling = false;

    function updateHeader() {
        const currentScrollY = window.scrollY;

        // Always show header at top of page
        if (currentScrollY <= 0) {
            header.classList.remove('header--hidden');
        }
        // Hide/show based on scroll direction after threshold
        else if (currentScrollY > SCROLL_THRESHOLD) {
            if (currentScrollY > lastScrollY) {
                header.classList.add('header--hidden');
                closeAll(); // Close dropdowns when hiding header
            } else if (currentScrollY < lastScrollY) {
                header.classList.remove('header--hidden');
            }
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