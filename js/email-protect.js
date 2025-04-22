document.addEventListener("DOMContentLoaded", function () {
    // 📧 E-post
    const user = "info";
    const domain = "weconnect.se";
    const email = `${user}@${domain}`;
    const emailElement = document.getElementById("email");
  
    if (emailElement) {
      const emailLink = `<a href="mailto:${email}">${email}</a>`;
      emailElement.innerHTML = emailLink;
    }
  
    // ☎️ Telefon
    const prefix = "+46";
    const number = "707123456"; // utan inledande 0
    const phoneElement = document.getElementById("phone");
  
    if (phoneElement) {
      const fullNumber = `${prefix} ${number}`;
      const telHref = `${prefix}${number}`;
      const phoneLink = `<a href="tel:${telHref}">${fullNumber}</a>`;
      phoneElement.innerHTML = phoneLink;
    }
  });
  