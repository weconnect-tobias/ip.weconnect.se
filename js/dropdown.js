/**
 * Accessible dropdown navigation & Hide-on-scroll header logic
 */
$(document).ready(function() {
    'use strict';

    const $header = $('header');
    let lastScrollTop = 0;
    let delta = 5;
    let headerHeight = $header.outerHeight();

    // Dropdown logic
    const $triggers = $('.has-dropdown');
    
    function closeAllDropdowns() {
        $triggers.parent().removeClass('open');
        $triggers.attr('aria-expanded', 'false');
    }

    $triggers.on('click', function(e) {
        e.preventDefault();
        const $parent = $(this).parent();
        const isOpen = $parent.toggleClass('open').hasClass('open');
        $(this).attr('aria-expanded', isOpen);
    });

    // Hantera klick utanför dropdown
    $(document).on('click', function(e) {
        if (!$(e.target).closest('nav').length) {
            closeAllDropdowns();
        }
    });

    // Header scroll behavior
    function hasScrolled() {
        const st = $(window).scrollTop();
        
        // Kontrollera att användaren har scrollat mer än delta
        if (Math.abs(lastScrollTop - st) <= delta) {
            return;
        }

        // Uppdatera header bakgrund
        if (st > 10) {
            $header.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
        }

        // Dölj/visa header baserat på scroll-riktning
        if (st > lastScrollTop && st > headerHeight) {
            // Scrollar nedåt
            $header.addClass('header-hidden');
            closeAllDropdowns();
        } else {
            // Scrollar uppåt eller är högst upp
            if (st + $(window).height() < $(document).height()) {
                $header.removeClass('header-hidden');
            }
        }
        
        lastScrollTop = st;
    }

    // Throttle scroll event
    let didScroll;
    $(window).scroll(function() {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    // Hantera touch events för mobil
    let touchStartY = 0;
    $(document).on('touchstart', function(e) {
        touchStartY = e.originalEvent.touches[0].clientY;
    });

    $(document).on('touchmove', function(e) {
        const touchY = e.originalEvent.touches[0].clientY;
        const diff = touchStartY - touchY;

        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                // Scrollar nedåt
                $header.addClass('header-hidden');
                closeAllDropdowns();
            } else {
                // Scrollar uppåt
                $header.removeClass('header-hidden');
            }
            touchStartY = touchY;
        }
    });

    // Reset header position on page load/refresh
    $(window).on('beforeunload', function() {
        $header.removeClass('header-hidden');
    });
});