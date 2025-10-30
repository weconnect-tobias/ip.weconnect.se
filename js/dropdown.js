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

    let lastScroll = 0;
    
    function handleScroll() {
        const currentScroll = window.scrollY;
        
        // At the very top of the page
        if (currentScroll <= 0) {
            header.classList.remove('header--hidden');
            return;
        }
        
        // Scrolling down
        if (currentScroll > lastScroll && currentScroll > 100) {
            header.classList.add('header--hidden');
            closeAll();
        }
        // Scrolling up
        else if (currentScroll < lastScroll) {
            header.classList.remove('header--hidden');
        }
        
        lastScroll = currentScroll;
    }

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });
    
    // Simple scroll listener without throttling for more responsive behavior
    window.addEventListener('scroll', handleScroll, { passive: true });
})();