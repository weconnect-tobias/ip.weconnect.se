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
    let lastScroll = window.pageYOffset;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 50 || lastScroll > currentScroll) {
            header.style.transform = "translateY(0)";
        } else {
            header.style.transform = "translateY(-100%)";
            closeAll();
        }
        
        lastScroll = currentScroll;
    }, { passive: true });

    // === 2. HEADER SCROLL BEHAVIOR ===
    let prevScrollpos = window.pageYOffset;
    
    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;
        const navbar = document.getElementById("navbar");
        
        if (prevScrollpos > currentScrollPos) {
            navbar.style.top = "0";
        } else {
            navbar.style.top = "-100%"; // Using -100% instead of fixed pixel value to ensure entire header is hidden
        }
        
        // Close dropdowns when hiding header
        if (prevScrollpos < currentScrollPos) {
            closeAll();
        }
        
        prevScrollpos = currentScrollPos;
    }

    // Event Listeners
    document.addEventListener('click', e => {
        if (!e.target.closest('nav')) closeAll();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeAll();
    });
})();