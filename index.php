<?php include __DIR__ . '/ip.php';
// Generera en unik, base64-kodad Nonce (används endast en gång)
$nonce = base64_encode(random_bytes(16));

// Skicka CSP-headern med den genererade Nonce
// Lägg till 'nonce-' . $nonce i script-src för att tillåta scripts som har denna nonce.
// Tighten Content Security Policy to reduce XSS risk.
// Notes:
// - We keep the per-request nonce ("nonce-{$nonce}") and 'self' for local scripts.
// - Restrict external scripts to the specific CDN host used (code.jquery.com) rather than allowing all https: origins.
// - Add useful security directives: object-src, base-uri, frame-ancestors and form-action.
// - Avoid adding 'unsafe-inline' for script-src (this weakens XSS protection). Use nonces/hashes or move inline scripts to external files.
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'nonce-{$nonce}' https://code.jquery.com; style-src 'self'; font-src 'self'; img-src 'self' data:; connect-src 'self'; object-src 'none'; base-uri 'self'; frame-ancestors 'none'; form-action 'self'; require-trusted-types-for 'script'; trusted-types default;");
// Cross-Origin-Opener-Policy: isolate top-level window from other origins (popups, other windows)
// This enables basic origin isolation. If you need full isolation for features like SharedArrayBuffer,
// consider also enabling Cross-Origin-Embedder-Policy: require-corp and ensure all cross-origin resources
// are served with appropriate CORP/CORS headers.
header('Cross-Origin-Opener-Policy: same-origin');
// Hide PHP X-Powered-By header for better security fingerprinting
@ini_set('expose_php', '0');
@header_remove('X-Powered-By');
?>
<!DOCTYPE html>
<html lang="sv-SE">
  <head>
  <meta charset="UTF-8">
  <!-- Main stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/weconnect2024.css">

  <title>IPv6 &amp; IPv4 — Vad är min IP‑adress? | Gratis IP‑check – WeConnect</title>
  <meta name="description" content="Visa din publika IP‑adress (IPv4 & IPv6) direkt. Lär dig vad en IP‑adress är och hur den används – snabbt, gratis och säkert.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="canonical" href="https://ip.weconnect.se/" />
  <meta name="seobility" content="df95fd8fec0aef960e98c9575023bef2">
	
  <!-- Dynamisk färg i adressfältet (PWA) -->
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0d1e55">
  <meta name="theme-color" media="(prefers-color-scheme: dark)"  content="#111835">

  <!-- Favicons & manifest -->
  <link rel="icon"             href="/img/icon-192.png" type="image/png">
  <link rel="apple-touch-icon" href="/img/icon-192.png">
  <link rel="manifest"         href="/site.webmanifest">


  <meta property="og:title" content="Vad är min IP‑adress? | Gratis IP‑check (IPv4 & IPv6) – WeConnect">
  <meta property="og:locale" content="sv_SE">
  <meta property="og:description" content="Visa din publika IP‑adress (IPv4 & IPv6) direkt – snabbt, gratis och utan spårning. Perfekt för support, felsökning och nätverkskontroll.">  <meta property="og:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">
  <meta property="og:url" content="https://ip.weconnect.se">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Vad är min IP‑adress? | Gratis IP‑check (IPv4 & IPv6) – WeConnect">
  <meta name="twitter:description" content="Visa din publika IP‑adress (IPv4 & IPv6) direkt – snabbt, gratis och utan spårning. Perfekt för support, felsökning och nätverkskontroll.">  <meta name="twitter:image" content="https://ip.weconnect.se/img/WeConnect-Logo-White-350.png">
  
  <!-- Resource hints -->
  <link rel="preload" href="/fonts/BalooDa2-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <!-- Preconnect to important external origins to shave connection time -->
  <link rel="preconnect" href="https://code.jquery.com" crossorigin>
  <!-- Preload critical stylesheet to improve LCP (loaded as style below) -->
  <link rel="preload" href="/css/weconnect2024.css" as="style">

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
  <script type="application/ld+json" nonce="<?= $nonce ?>">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
  {
  "@type": "Question",
  "name": "Hur ser jag min IP‑adress på mobilen?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Besök ip.weconnect.se i din mobilwebbläsare – verktyget visar automatiskt din publika IP‑adress, oavsett om du är ansluten via wifi eller mobilnät."
  }
},
{
  "@type": "Question",
  "name": "Är min IP‑adress statisk eller dynamisk?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "De flesta privatkunder får en dynamisk IP som kan ändras när du startar om routern. Vill du veta säkert, kontakta din internetleverantör."
  }
},
{
  "@type": "Question",
  "name": "Hur skyddar jag min IP‑adress från spårning?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Du kan använda en VPN‑tjänst, proxyserver eller Tor för att dölja din IP och öka din integritet online."
  }
}
  ],
  "author": {
    "@type": "Organization",
    "name": "We Connect Nordic AB"
  },
  "publisher": {
    "@type": "Organization",
    "name": "We Connect Nordic AB",
    "logo": {
      "@type": "ImageObject",
      "url": "https://ip.weconnect.se/img/WeConnect-Logo-White-350.png"
    }
  },
  "datePublished": "2025-06-02"
}
</script>
<script type="application/ld+json" nonce="<?= $nonce ?>">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "IP.WeConnect.se",
  "url": "https://ip.weconnect.se/",
  "author": {
    "@type": "Organization",
    "name": "We Connect Nordic AB"
  }
}
</script>
<script type="application/ld+json" nonce="<?= $nonce ?>">
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
    "name": "We Connect Nordic AB",
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
<script type="application/ld+json" nonce="<?= $nonce ?>">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "WeConnect",
      "item": "https://weconnect.se"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "IP-tjänst",
      "item": "https://ip.weconnect.se"
    }
  ]
}
</script>

</head>
<body>

<div class="gradient-wrapper">
  <header>
    <div class="header-container">
      <a href="https://weconnect.se" target="_blank" rel="noopener noreferrer" aria-label="WeConnect Nordic AB Hemsida">
        <picture>
          <source srcset="/img/WeConnect-Logo-White-350.webp" type="image/webp">
          <source srcset="/img/WeConnect-Logo-White-350.png"  type="image/png">
          <img class="logo-style" src="/img/WeConnect-Logo-White-350.png" alt="WeConnect Nordic AB Logotyp" loading="lazy" decoding="async" 
              width="350" height="80">
        </picture>
      </a>
      <nav aria-label="Huvudmeny">
        <ul>
          <li>
            <button type="button" class="has-dropdown" id="toggle-menu-tjanster" aria-haspopup="true" aria-expanded="false" aria-controls="menu-tjanster">Tjänster
              <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false"><path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/></svg>
            </button>
            <ul class="dropdown" role="menu" id="menu-tjanster" aria-labelledby="toggle-menu-tjanster">
              <li><a role="menuitem" href="https://weconnect.se/nis-nis2-iso27001-loggning/">NIS/NIS2 & ISO27001 loggning</a></li>
              <li><a role="menuitem" href="https://weconnect.se/it-support/">IT‑Support</a></li>
              <li><a role="menuitem" href="https://weconnect.se/natverk-wifi/">Nätverk & Wifi</a></li>
              <li><a role="menuitem" href="https://weconnect.se/sakert-natverk/">Säkert Nätverk</a></li>
              <li><a role="menuitem" href="https://weconnect.se/wordpress-hemsida/">Webbdesign i WordPress</a></li>
            </ul>
          </li>
          <li><a href="https://weconnect.se/system-flight/">System Flight</a></li>
          <li>
            <button type="button" class="has-dropdown" id="toggle-menu-kontakt" aria-haspopup="true" aria-expanded="false" aria-controls="menu-kontakt">Kontakt
              <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" focusable="false"><path fill="currentColor" d="M96 192h128c17.7 0 26.6 21.5 14.1 34L174.1 290c-7.6 7.6-19.8 7.6-27.3 0L81.9 226c-12.5-12.5-3.6-34 14.1-34z"/></svg>
            </button>
            <ul class="dropdown" role="menu" id="menu-kontakt" aria-labelledby="toggle-menu-kontakt">
              <li><a role="menuitem" href="https://weconnect.se/kontakt/">Kontakta oss</a></li>
              <li><a role="menuitem" href="https://weconnect.se/nyheter-tips/">Nyheter & Tips</a></li>
            </ul>
          </li>
          <li><a href="https://weconnect.se/fjarrsupport/">Fjärrsupport</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="hero-gradient-area">
    <div class="hero-text">
      <h2 class="hero-title">IT support &amp; lösningar</h2>
      <p class="hero-subtitle">För små &amp; mellanstora företag</p>
    </div>
  </div>
</div>
    
    <main>
  <section id="main-content-white">
    <div class="ip-box">

      <!-- Ikon -->
      <svg class="ip-icon" width="36" height="18" viewBox="0 0 48 24" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
        <title>IPv4 och IPv6 ikon</title>
        <rect x="1" y="2" width="20" height="20" rx="3" fill="#0d1e55"/>
        <path d="M5 8h10v2H5V8zm0 4h6v2H5v-2z" fill="#9a007e"/>
        <circle cx="36" cy="12" r="10" fill="#111835"/>
        <path d="M31 12c0-1.657 1.343-3 3-3h4c1.657 0 3 1.343 3 3s-1.343 3-3 3h-4c-1.657 0-3-1.343-3-3z" fill="#9a007e"/>
        <line x1="24" y1="4" x2="24" y2="20" stroke="#ffffff" stroke-opacity="0.08" stroke-width="1"/>
      </svg>

      <span class="sr-only">Visar stöd för IPv4 och IPv6</span>

      <!-- Rubrik -->
      <h1>Din publika IP‑adress</h1>

      <!-- IPv4 -->
      <?php if ($ipv4): ?>
        <p>
          <span class="ip-label">IPv4:</span>
          <span id="ipv4-display"
                class="ip-number"
                role="button"
                tabindex="0"
                aria-label="<?= htmlspecialchars($ipv4, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?> (Klicka för att kopiera)"
                data-ip="<?= htmlspecialchars($ipv4, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>">
                <?= htmlspecialchars($ipv4, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>
          </span>
        </p>
      <?php endif; ?>

      <!-- IPv6 -->
      <?php if ($ipv6): ?>
        <p>
          <span class="ip-label">IPv6:</span>
          <span id="ipv6-display"
                class="ip-number"
                role="button"
                tabindex="0"
                aria-label="<?= htmlspecialchars($ipv6, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?> (Klicka för att kopiera)"
                data-ip="<?= htmlspecialchars($ipv6, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>">
                <?= htmlspecialchars($ipv6, ENT_QUOTES|ENT_HTML5, 'UTF-8') ?>
          </span>
        </p>
      <?php endif; ?>

      <!-- Om ingen IP hittades -->
      <?php if (!$ipv4 && !$ipv6): ?>
        <p>Ingen publik IP-adress kunde identifieras.</p>
      <?php endif; ?>

    </div>
  </section>

  <div>
    <h2>Vad är en IP-adress? (Förklaring)</h2>
    <p>En IP-adress är som en "hemadress" för din internetanslutning. Den gör det möjligt för webbplatser och tjänster att veta var information ska skickas – lite som ett returadress‑kuvert, fast digitalt. Den identifierar din anslutning på internet så att data du begär (som denna webbsida) kan hitta tillbaka till dig.</p>
    <p>Den här sidan visar vilken publik IP‑adress du använder just nu för att kommunicera med internet, oavsett om det är en <strong>IPv4</strong>- eller <strong>IPv6</strong>-adress. Denna information kan vara användbar i flera situationer, exempelvis vid IT‑support, nätverksfelsökning eller konfigurering av en router.</p>
  </div>

  <hr class="my-4">
    <h2>Användningsområden för din IP‑adress</h2>
    <p>Att känna till din publika IP‑adress är viktigt i många situationer, bland annat:</p>
    <ul>
      <li>Teknisk support vid felsökning av din uppkoppling.</li>
      <li>Onlinespel – för att ansluta till servrar eller hosta spel.</li>
      <li>Fjärråtkomst till din dator eller andra enheter på nätverket.</li>
      <li>Konfigurering av brandväggar, routrar och annan nätverksutrustning.</li>
      <li>Geografisk anpassning av innehåll, t.ex. lokala nyheter och väder.</li>
      <li>Ökad medvetenhet om din säkerhet och integritet online.</li>
    </ul>
  </div>

  <hr class="my-4">
  <div class="mt-4">
    <h2>IPv4 kontra IPv6</h2>
    <p>Internet använder huvudsakligen två typer av IP‑adresser: IPv4 och IPv6.</p>
    <ul>
      <li><strong>IPv4 (Internet Protocol version 4):</strong> Detta är den äldre standarden och representeras oftast som fyra sifferblock separerade med punkter (t.ex. 192.0.2.1). Antalet tillgängliga IPv4-adresser börjar ta slut.</li>
      <li><strong>IPv6 (Internet Protocol version 6):</strong> Detta är en nyare standard som infördes för att lösa bristen på IPv4‑adresser. IPv6‑adresser är längre och skrivs med hexadecimala siffror och kolon (t.ex. <code>2001:db8::1</code>). IPv6 erbjuder ett nästan obegränsat antal adresser och andra tekniska förbättringar.</li>
    </ul>
    <p>Vårt verktyg visar automatiskt vilken typ av publik IP‑adress (IPv4 eller IPv6) ditt nätverk för närvarande använder för att ansluta till internet. Allt fler internetleverantörer och webbplatser stöder nu IPv6.</p>
  </div>

  <hr class="my-4">
  <div class="mt-4">
    <h2>Vanliga frågor om IP‑adresser</h2>

    <h3>Hur ser jag min IP‑adress på mobilen?</h3>
    <p>Besök <strong>ip.weconnect.se</strong> i din mobilwebbläsare – verktyget visar automatiskt din publika IP‑adress, oavsett om du är ansluten via wifi eller mobilnät.</p>

    <h3>Är min IP‑adress statisk eller dynamisk?</h3>
    <p>De flesta privatkunder får en dynamisk IP som kan ändras när du startar om routern. Vill du veta säkert, kontakta din internetleverantör.</p>

    <h3>Hur skyddar jag min IP‑adress från spårning?</h3>
    <p>Du kan använda en VPN‑tjänst, proxyserver eller Tor för att dölja din IP och öka din integritet online.</p>
  </div>

  <hr class="my-4">
  <section class="ip-seo-copy mt-4">
    <h2>Fler tips om din IP‑adress</h2>
    <p>Att förstå din <strong>publika IP‑adress</strong> är första steget mot en säker och stabil uppkoppling. Med vårt verktyg ser du både <strong>IPv4</strong> och <strong>IPv6</strong> – utan cookies eller inloggning. Perfekt för <a href="https://weconnect.se/it-support/">IT‑support</a>, <a href="https://weconnect.se/natverk-wifi/">nätverkskontroll</a> och felsökning.</p>
    <p>Behöver du hjälp att säkra din anslutning eller sätta upp en statisk IP? Kontakta oss på WeConnect för skräddarsydda <a href="https://weconnect.se/sakert-natverk/">nätverkslösningar</a>.</p>
  </section>

  <div class="text-center mt-5 mb-4">
    <p><small>IP.weconnect.se – Ditt snabba och enkla verktyg för att se din IP‑adress.</small></p>
  </div>

</section>
</main>
<footer class="auto-margin-footer" role="contentinfo">
  <div class="footer-section">
<img src="img/WeConnect-Logo-White-350.webp" alt="WeConnect logotyp – expert på IT-support, nätverk och säkerhet" width="175" height="40">  </div>
  <div class="footer-section">
    <strong>Adress Strömstad</strong><br>
    Oslovägen 50<br>
    452 35 Strömstad
  </div>
  <div class="footer-section">
    <strong>Kontakt info</strong><br>
    <span id="phone"></span><br>
    <span id="email"></span>.</p>
  </div>
</footer>

  <!-- JS‑bundle -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" nonce="<?= $nonce ?>"></script>
  <script src="/js/copy-ip.js"     nonce="<?= $nonce ?>" defer></script>
  <script src="/js/email-protect.js" nonce="<?= $nonce ?>" defer></script>
  <script src="/js/dropdown.js"   nonce="<?= $nonce ?>" defer></script>
</body>
</html>