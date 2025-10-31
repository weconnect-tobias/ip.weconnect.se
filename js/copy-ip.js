document.addEventListener('DOMContentLoaded', function () {
  const ipElements = document.querySelectorAll('.ip-number');

  ipElements.forEach(ipElement => {
    function copyIP() {
      const ip = ipElement.dataset.ip || ipElement.textContent.trim();

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

    ipElement.addEventListener('click', copyIP);

    ipElement.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        copyIP();
      }
    });

    ipElement.addEventListener('mouseover', function () {
      this.setAttribute('title', 'Klicka för att kopiera');
    });
  });
});