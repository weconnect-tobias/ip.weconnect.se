<?php include __DIR__ . '/ip.php'; ?>
<!DOCTYPE html>
<html lang="sv">
  <head>
  <meta charset="UTF-8">
  <title>Vad är min IP-adress? | Snabb IP-check utan spårning – WeConnect</title>
  <meta name="description" content="Hitta snabbt och enkelt din publika IP-adress (IPv4 eller IPv6) med vårt kostnadsfria IP-verktyg. Se din IP-plats och lär dig mer om IP-adresser.">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data: https:; font-src 'self'; connect-src 'self';">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Dynamisk färg i adressfältet (PWA) -->
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0d1e55">
  <meta name="theme-color" media="(prefers-color-scheme: dark)"  content="#111835">

  <!-- Preloads -->
  <link rel="preload" href="/fonts/BalooDa2-Regular.woff2" as="font" type="font/woff2" crossorigin>

  <link rel="canonical" href="https://ip.weconnect.se/" />
  <meta name="seobility" content="df95fd8fec0aef960e98c9575023bef2">
	
  <!-- Dynamisk färg i adressfältet (PWA) -->
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0d1e55">
  <meta name="theme-color" media="(prefers-color-scheme: dark)"  content="#111835">

  <!-- Favicons & manifest -->
  <link rel="icon"             href="/img/icon-192.png" type="image/png">
  <link rel="apple-touch-icon" href="/img/icon-192.png">
  <link rel="manifest"         href="/site.webmanifest">

  <!-- Main stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/weconnect2024.css">

  <meta property="og:title" content="Vad är min IP-adress? | WeConnect IP-tjänst">
  <meta property="og:locale" content="sv_SE">
  <meta property="og:description" content="Visa din publika IPv4- eller IPv6-adress direkt på ip.weconnect.se – inga cookies, ingen inloggning. Perfekt för felsökning eller support.">  <meta property="og:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">
  <meta property="og:url" content="https://ip.weconnect.se">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Vad är min IP-adress? | WeConnect IP-tjänst">
  <meta name="twitter:description" content="Visa din publika IPv4- eller IPv6-adress direkt på ip.weconnect.se – inga cookies, ingen inloggning. Perfekt för felsökning eller support.">  <meta name="twitter:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">
  
  <!-- Resource hints -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="preload" href="fonts/BalooDa2-Regular.woff2" as="font" type="font/woff2" crossorigin>


  <!-- Ytterligare meta för sökmotorer -->
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="googlebot" content="index, follow">

  <!-- Mobile meta -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="IP-adress">

  <!-- Geo meta (om relevant) -->
  <meta name="geo.region" content="SE">
  <meta name="geo.placename" content="Sverige">

  <!-- Språk alternativ om du planerar fler språk -->
  <link rel="alternate" hreflang="sv" href="https://ip.weconnect.se/">
  <link rel="alternate" hreflang="x-default" href="https://ip.weconnect.se/">

  <!-- Structured data (Schema.org) -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Vad är en IP-adress?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "En IP-adress är som en 'hemadress' för din internetanslutning. Den gör det möjligt för webbplatser och tjänster att veta var information ska skickas. Den identifierar din anslutning på internet så att data du begär kan hitta tillbaka till dig."
      }
    },
    {
      "@type": "Question",
      "name": "Varför behöver jag veta min IP-adress?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Du kan behöva din IP-adress för teknisk support, onlinespel, fjärråtkomst till din dator, inställningar för nätverksutrustning, för att förstå vilken geografisk data webbplatser ser om dig, eller för allmän säkerhetsmedvetenhet."
      }
    },
    {
      "@type": "Question",
      "name": "Vad är skillnaden mellan IPv4 och IPv6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "IPv4 är en äldre standard med ett begränsat antal adresser. IPv6 är en nyare standard med ett nästan obegränsat antal adresser som infördes för att lösa bristen på IPv4-adresser och erbjuda tekniska förbättringar."
      }
    }
  ],
  "author": {
    "@type": "Organization",
    "name": "WeConnect Nordic AB"
  },
  "publisher": {
    "@type": "Organization",
    "name": "WeConnect Nordic AB",
    "logo": {
      "@type": "ImageObject",
      "url": "https://ip.weconnect.se/img/WeConnect-Logo-White-350.png"
    }
  },
  "datePublished": "2025-06-02"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "IP.WeConnect.se",
  "url": "https://ip.weconnect.se/",
  "author": {
    "@type": "Organization",
    "name": "WeConnect Nordic AB"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "WeConnect IP-tjänst",
  "description": "Ett snabbt och enkelt verktyg för att se din publika IP-adress (IPv4/IPv6).",
  "url": "https://ip.weconnect.se",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "SEK"
  },
  "provider": {
    "@type": "Organization",
    "name": "WeConnect Nordic AB",
    "url": "https://weconnect.se"
  },
  "featureList": [
    "Visa IPv4-adress",
    "Visa IPv6-adress", 
    "Kopiera IP-adress",
    "Ingen inloggning krävs",
    "Inga cookies"
  ]
}
</script>
</head>
<body>

<header>
      <div class="header-container">
        <a href="https://weconnect.se" target="_blank" rel="noopener noreferrer" aria-label="WeConnect Nordic AB Hemsida">
          <picture>
            <source srcset="/img/WeConnect-Logo-White-350.webp" type="image/webp">
            <source srcset="/img/WeConnect-Logo-White-350.png"  type="image/png">
            <img src="/img/WeConnect-Logo-White-350.png" alt="WeConnect Nordic AB Logotyp" loading="lazy" decoding="async" style="max-width:250px;height:auto;">
          </picture>
        </a>
        <nav aria-label="Huvudmeny">
          <ul>
            <li>
              <a href="#" class="has-dropdown" aria-haspopup="true" aria-expanded="false">Tjänster
                <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false"><path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/></svg>
              </a>
              <ul class="dropdown" role="menu">
                <li><a href="https://weconnect.se/nis-nis2-iso27001-loggning/">NIS/NIS2 & ISO27001 loggning</a></li>
                <li><a href="https://weconnect.se/it-support/">IT‑Support</a></li>
                <li><a href="https://weconnect.se/natverk-wifi/">Nätverk & Wifi</a></li>
                <li><a href="https://weconnect.se/sakert-natverk/">Säkert Nätverk</a></li>
                <li><a href="https://weconnect.se/wordpress-hemsida/">Webbdesign i WordPress</a></li>
              </ul>
            </li>
            <li><a href="https://weconnect.se/system-flight/">System Flight</a></li>
            <li>
              <a href="https://weconnect.se/kontakt/" class="has-dropdown" aria-haspopup="true" aria-expanded="false">Kontakt
                <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false"><path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/></svg>
              </a>
              <ul class="dropdown" role="menu">
                <li><a href="https://weconnect.se/nyheter-tips/">Nyheter & Tips</a></li>
              </ul>
            </li>
            <li><a href="https://123support.se">Fjärrsupport</a></li>
          </ul>
        </nav>
      </div>
</header>

<div class="hero-gradient-area" role="banner">
      <div class="hero-text">
        <h2 class="hero-title">IT support &amp; lösningar</h2>
        <p  class="hero-subtitle">För små &amp; mellanstora företag</p>
      </div>
    </div>

<main>
<main>
      <section id="main-content-white">
        <div class="ip-box">
          <h1>Din IP‑adress är&nbsp;
            <button id="ip-display" class="ip-number" aria-label="Kopiera IP-adress" data-ip="<?= htmlspecialchars($ipaddress, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>">
              <?= htmlspecialchars($ipaddress, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>
            </button>
          </h1>
        </div>

  <div>
    <h2>Vad är en IP-adress? (Förklaring)</h2> <p>
      En IP-adress är som en "hemadress" för din internetanslutning. Den gör det möjligt för webbplatser och tjänster att veta var information ska skickas – lite som ett returadress-kuvert, fast digitalt. Den identifierar din anslutning på internet så att data du begär (som denna webbsida) kan hitta tillbaka till dig.
    </p>
    <p>
      Den här sidan visar vilken publik IP-adress du använder just nu för att kommunicera med internet, oavsett om det är en <strong>IPv4</strong>- eller <strong>IPv6</strong>-adress. Denna information kan vara användbar i flera situationer, exempelvis vid IT-support, nätverksfelsökning eller konfigurering av en router.
    </p>
  </div>

  <hr class="my-4"> <div class="mt-4"> <h2>Varför behöver jag veta min IP-adress?</h2>
    <p>Att känna till din IP-adress kan vara viktigt i olika sammanhang:</p>
    <ul>
      <li><strong>Teknisk support:</strong> När du kontaktar IT-support kan de be om din IP-adress för att lättare kunna felsöka problem med din anslutning.</li>
      <li><strong>Onlinespel:</strong> Vissa onlinespel kan kräva din IP-adress för att du ska kunna ansluta till spelservrar eller vara värd för ett eget spel.</li>
      <li><strong>Fjärråtkomst:</strong> Om du vill ansluta till din hemdator eller andra enheter på distans (t.ex. via Remote Desktop eller SSH) behöver du ofta känna till din publika IP-adress.</li>
      <li><strong>Inställningar för nätverksutrustning:</strong> Vid konfigurering av brandväggar, routrar eller annan nätverksutrustning.</li>
      <li><strong>Geografisk positionering:</strong> Webbplatser och tjänster kan använda din IP-adress för att anpassa innehåll baserat på din ungefärliga geografiska plats (t.ex. visa lokala nyheter eller väder).</li>
      <li><strong>Säkerhetsmedvetenhet:</strong> För att förstå vilken information du delar och för att kunna identifiera eventuell ovanlig aktivitet kopplad till din IP-adress.</li>
    </ul>
  </div>

  <hr class="my-4"> <div class="mt-4">
    <h2>IPv4 kontra IPv6</h2>
    <p>
      Internet använder huvudsakligen två typer av IP-adresser: IPv4 och IPv6.
    </p>
    <ul>
      <li><strong>IPv4 (Internet Protocol version 4):</strong> Detta är den äldre standarden och representeras oftast som fyra sifferblock separerade med punkter (t.ex. <code>192.0.2.1</code>). Antalet tillgängliga IPv4-adresser börjar ta slut.</li>
      <li><strong>IPv6 (Internet Protocol version 6):</strong> Detta är en nyare standard som infördes för att lösa bristen på IPv4-adresser. IPv6-adresser är längre och skrivs med hexadecimala siffror och kolon (t.ex. <code>2001:0db8:85a3:0000:0000:8a2e:0370:7334</code>). IPv6 erbjuder ett nästan obegränsat antal adresser och andra tekniska förbättringar.</li>
    </ul>
    <p>
      Vårt verktyg visar automatiskt vilken typ av publik IP-adress (IPv4 eller IPv6) ditt nätverk för närvarande använder för att ansluta till internet. Allt fler internetleverantörer och webbplatser stöder nu IPv6.
    </p>
  </div>

  <div class="text-center mt-5 mb-4">
      <p><small>IP.weconnect.se - Ditt snabba och enkla verktyg för att se din IP-adress.</small></p>
  </div>

</section>
</main>
<footer style="margin-top: auto;">
  <div class="footer-section">
    <img src="img/WeConnect-Logo-White-350.webp" alt="WeConnect logotyp – expert på IT-support, nätverk och säkerhet" height="40">
  </div>
  <div class="footer-section">
    <strong>Adress Strömstad</strong><br>
    Oslovägen 50<br>
    452 35 Strömstad
  </div>
  <div class="footer-section">
    <strong>Kontakt info</strong><br>
    <span id="phone"></span>
    <span id="email"></span>.</p>
  </div>
</footer>

  <!-- JS‑bundle -->
  <script src="/js/copy-ip.js"     defer></script>
  <script src="/js/email-protect.js" defer></script>
  <script src="/js/dropdown.js"   defer></script>
</body>
</html>