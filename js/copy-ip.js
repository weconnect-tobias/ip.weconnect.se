document.addEventListener('DOMContentLoaded', function () {
  const ipElement = document.querySelector('.ip-number');

  function copyIP() {
    const ip = ipElement.textContent.trim();

    navigator.clipboard.writeText(ip).then(() => {
      ipElement.classList.add('copied');
      ipElement.setAttribute('aria-label', `${ip} (Kopierad!)`);

      setTimeout(() => {
        ipElement.classList.remove('copied');
        ipElement.setAttribute('aria-label', `${ip} (Klicka för att kopiera)`);
      }, 1500);
    }).catch(err => {
      console.error('Kopiering misslyckades:', err);
    });
  }

  // Handle mouse clicks
  ipElement.addEventListener('click', copyIP);

  // Handle keyboard events (Enter and Space)
  ipElement.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault(); // Prevent page scroll on space
      copyIP();
    }
  });

  // Handle hover state for better UX
  ipElement.addEventListener('mouseover', function() {
    this.setAttribute('title', 'Klicka för att kopiera');
  });
});