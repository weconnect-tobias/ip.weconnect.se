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
    let lastScroll = 0;
    let scrollTimer = null;
    const scrollThreshold = 50; // Minimum scroll distance before hiding header
    const headerHeight = header.offsetHeight;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        // Always show header at top of page
        if (currentScroll < headerHeight) {
            header.style.transform = "translateY(0)";
            return;
        }

        // Don't hide header during small scroll adjustments
        if (Math.abs(currentScroll - lastScroll) < scrollThreshold) {
            return;
        }

        // Scrolling down
        if (currentScroll > lastScroll) {
            header.style.transform = "translateY(-100%)";
            closeAll();
        } 
        // Scrolling up
        else {
            header.style.transform = "translateY(0)";
        }
        
        lastScroll = currentScroll;

        // Clear existing timer
        if (scrollTimer !== null) {
            clearTimeout(scrollTimer);
        }

        // Set new timer to show header after scrolling stops
        scrollTimer = setTimeout(() => {
            header.style.transform = "translateY(0)";
        }, 1500);
    }, { passive: true });

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });
})();