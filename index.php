<?php include __DIR__ . '/ip.php'; ?>
<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>What's my IP dude!</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/icon-144x144-1.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="img/icon-144x144-1.png" />
	<meta name="msapplication-TileImage" content="img/icon-144x144-1.png" />
	<link rel="stylesheet" type="text/css" href="css/weconnect2024.css">
</head>
<body>

<header>
  <div class="header-container">
    <img src="img/WeConnect-Logo-White-350.png" alt="WeConnect Logo">
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
    <h1>IT support & lösningar</h1>
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
    Den här sidan visar din publika IP-adress – alltså det "nummer" som identifierar din internetanslutning just nu.  
    Du kan behöva den här informationen om du får hjälp av support, ska ställa in en nätverkstjänst eller bara är nyfiken.
  </p>
</div>

</section>

<footer style="margin-top: auto;">
  <div class="footer-section">
    <img src="img/WeConnect-Logo-White-350.png" alt="WeConnect Logo" height="40">
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