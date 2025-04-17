<?php include __DIR__ . '/ip.php'; ?>
<?php header('Content-Security-Policy: default-src \'self\'; img-src \'self\' https:; script-src \'self\'; style-src \'self\' https://cdnjs.cloudflare.com;');  ?>
<?php header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php header('X-Frame-Options: DENY'); ?>
<?php header('Referrer-Policy: same-origin'); ?>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/v4-shims.min.css" integrity="sha512-4yDn1AmIfvyydlRqsIga3JribpHu5HdkIFTBZjJPcz01tcsd8B9UwObwZCGez1ZOyUNnxjNQNcZEElhkguF76Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
  <div class="header-container">
    <img src="img/WeConnect-Logo-White-350.png" alt="WeConnect Logo">
    <nav>
  <ul>
    <li>
      <a href="#">Tjänster</a>
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
      <a href="https://weconnect.se/kontakt/">Kontakt</a>
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
  <div class="tools ip-box">
    <h1>Din IP Adress: <?= htmlspecialchars($ipaddress, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?></h1>
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
    <strong>Adress Göteborg</strong><br>
    Drottninggatan 38 3tr<br>
    411 07 Göteborg
  </div>
  <div class="footer-section">
    <strong>Kontakt info</strong><br>
    <a href="tel:+4652666066">+46 526 66066</a><br>
    <a href="mailto:info@weconnect.se">info@weconnect.se</a>
  </div>
</footer>

</body>
</html>