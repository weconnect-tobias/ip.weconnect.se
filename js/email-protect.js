document.addEventListener("DOMContentLoaded", function () {

    // Hjälpfunktion för att säkert skapa A-taggar
    function createLink(href, text, ariaLabel) {
        const link = document.createElement('a');
        link.href = href;
        link.textContent = text;
        link.setAttribute('aria-label', ariaLabel);
        return link;
    }

    // 📧 E-post
    const user = "info";
    const domain = "weconnect.se";
    const email = `${user}@${domain}`;
    const emailElement = document.getElementById("email");
  
    if (emailElement) {
      // Skapa en säker länk-nod
      const emailLinkNode = createLink(`mailto:${email}`, email, "Skicka e-post till WeConnect");
      
      // Använd appendChild istället för innerHTML för att injicera noden säkert
      emailElement.appendChild(emailLinkNode);
    }
  
    // ☎️ Telefon
    const prefix = "+46";
    const number = "52666066"; // utan inledande 0
    const phoneElement = document.getElementById("phone");
  
    if (phoneElement) {
      const fullNumber = `${prefix} ${number}`;
      const telHref = `${prefix}${number}`;
      
      // Skapa en säker länk-nod
      const phoneLinkNode = createLink(`tel:${telHref}`, fullNumber, `Ring ${fullNumber}`);
      
      // Använd appendChild istället för innerHTML för att injicera noden säkert
      phoneElement.appendChild(phoneLinkNode);
    }
});