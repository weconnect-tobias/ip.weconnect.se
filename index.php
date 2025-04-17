<!DOCTYPE html>
<html>
  <header>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>What's my IP dude!</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/icon-144x144-1.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="img/icon-144x144-1.png" />
	<meta name="msapplication-TileImage" content="img/icon-144x144-1.png" />
	<link rel="stylesheet" type="text/css" href="css/weconnect2024.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/v4-shims.min.css" integrity="sha512-4yDn1AmIfvyydlRqsIga3JribpHu5HdkIFTBZjJPcz01tcsd8B9UwObwZCGez1ZOyUNnxjNQNcZEElhkguF76Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php include("ip.php"); ?>
</header>
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
  <!-- Box för IPv4-adressen -->
  <div  class="tools ip-box">
    <h1>IPv4: <?php echo $ipv4 ? $ipv4 : 'N/A'; ?></h1>
  </div>
  
  <br>
  
  <!-- Box för IPv6-adressen (visas bara om den finns) -->
  <?php if (!empty($ipv6)) : ?>
  <div class="tools ip-box">
    <h1>IPv6: <?php echo $ipv6; ?></h1>
  </div>
  <?php endif; ?>

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