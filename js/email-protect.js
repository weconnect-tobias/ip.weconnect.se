document.addEventListener("DOMContentLoaded", function () {
    const user = "info";
    const domain = "weconnect.se";
    const email = user + "@" + domain;
    const emailLink = `<a href="mailto:${email}">${email}</a>`;
    const emailElement = document.getElementById("email");
  
    if (emailElement) {
      emailElement.innerHTML = emailLink;
    }
  });
  