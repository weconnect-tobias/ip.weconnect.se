/**
 * Accessible dropdown navigation
 */
(function(){
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
      if(!e.target.closest('nav')) closeAll();
    });
  
    document.addEventListener('keydown', e => {
      if(e.key === 'Escape') closeAll();
    });
  })();