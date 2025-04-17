document.addEventListener('DOMContentLoaded', function () {
  const ipElement = document.querySelector('.ip-number');

  ipElement.addEventListener('click', function () {
    const ip = ipElement.textContent.trim();

    navigator.clipboard.writeText(ip).then(() => {
      ipElement.classList.add('copied');
      ipElement.setAttribute('title', 'Kopierad!');

      setTimeout(() => {
        ipElement.classList.remove('copied');
        ipElement.setAttribute('title', 'Klicka för att kopiera');
      }, 1500);
    }).catch(err => {
      console.error('Kopiering misslyckades:', err);
    });
  });
});