<?php include __DIR__ . '/ip.php'; ?>
<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Vad är min IP-adress? | Se din publika IP – WeConnect</title>
  <meta name="description" content="Se din publika IP-adress direkt på ip.weconnect.se – ingen inloggning, inga cookies, bara din aktuella IPv4- eller IPv6-adress. Perfekt vid IT-support eller nätverksfelsökning.">	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="https://ip.weconnect.se/" />
  <link rel="icon" href="img/icon-144x144-1.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="img/icon-144x144-1.png" />
	<meta name="msapplication-TileImage" content="img/icon-144x144-1.png" />
	<link rel="stylesheet" type="text/css" href="css/weconnect2024.css">
  <meta property="og:title" content="Vad är min IP-adress? | WeConnect IP-tjänst">
  <meta property="og:description" content="Kolla din publika IP-adress snabbt och enkelt – ingen spårning, bara ren info. Användbar vid felsökning, support eller nätverksinställningar.">
  <meta property="og:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">
  <meta property="og:url" content="https://ip.weconnect.se">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Vad är min IP-adress? | WeConnect IP-tjänst">
  <meta name="twitter:description" content="Din publika IP-adress direkt i webbläsaren. Enkel, gratis och utan spårning.">
  <meta name="twitter:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">

  
  <!-- Structured data (Schema.org) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "WeConnect IP-tjänst",
    "url": "https://ip.weconnect.se",
    "description": "Visa din aktuella publika IP-adress snabbt och säkert. Perfekt vid support och felsökning."
  }
  </script>
</head>
<body>

<header>
  <div class="header-container">
    <img src="img/WeConnect-Logo-White-350.png" alt="WeConnect – IT-support och nätverk för småföretag">
    <nav>
  <ul>
    <li>
    <a href="#">Tjänster 
    <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false">
      <path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/>
    </svg>
    </a>
      <ul>
        <li><a href="https://weconnect.se/nis-nis2-iso27001-loggning/">NIS/NIS2 & ISO27001 loggning</a></li>
        <li><a href="https://weconnect.se/it-support/">IT-Support</a></li>
        <li><a href="https://weconnect.se/natverk-wifi/">Nätverk & Wifi</a></li>
        <li><a href="https://weconnect.se/sakert-natverk/">Säkert Nätverk</a></li>
        <li><a href="https://weconnect.se/utveckling/">Utveckling</a></li>
        <li><a href="https://weconnect.se/wordpress-hemsida/">Webbdesign i WordPress</a></li>
      </ul>
    </li>
    <li><a href="https://weconnect.se/system-flight/">System Flight</a></li>
    <li>
      <a href="https://weconnect.se/kontakt/">Kontakt 
      <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false">
      <path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/>
    </svg>
      </a>
      <ul>
        <li><a href="https://weconnect.se/nyheter-tips/">Nyheter & Tips</a></li>
      </ul>
    </li>
    <li><a href="https://123support.se">Fjärrsupport</a></li>
  </ul>
</nav>
  </div>
</header>

<!-- Blended Gradient Section -->
<main id="main-content">
  <div>
    <h2>IT support & lösningar</h2>
    <p>För små & mellanstora företag</p>
  </div>
</main>

<!-- White Background Section -->
<section id="main-content-white">
  <div class="ip-box">
    <h1>Din IP Adress är: <?= htmlspecialchars($ipaddress, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?></h1>
  </div>

  <div>
  <h2>Förklaring</h2>
<p>
  En IP-adress är som en "hemadress" för din internetanslutning. Den gör det möjligt för webbplatser och tjänster att veta var information ska skickas – lite som ett returadress-kuvert, fast digitalt.
</p>
<p>
  Den här sidan visar vilken IP-adress du använder just nu, oavsett om det är en <strong>IPv4</strong>- eller <strong>IPv6</strong>-adress. Du kan behöva den här informationen om du får IT-support, felsöker nätverket eller ställer in en router.
</p>
</div>

</section>

<footer style="margin-top: auto;">
  <div class="footer-section">
    <img src="img/WeConnect-Logo-White-350.png" alt="WeConnect logotyp – expert på IT-support, nätverk och säkerhet" height="40">
  </div>
  <div class="footer-section">
    <strong>Adress Strömstad</strong><br>
    Oslovägen 50<br>
    452 35 Strömstad
  </div>
  <div class="footer-section">
    <strong>Kontakt info</strong><br>
    <a href="tel:+4652666066">+46 526 66066</a><br>
    <a href="mailto:info@weconnect.se">info@weconnect.se</a>
  </div>
</footer>

</body>
</html>