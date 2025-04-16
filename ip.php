<?php
// Funktion för att sanera strängar
function mm_strip(string $string): string {
    $string = trim($string); 
    $string = strip_tags($string);
    $string = htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $string = str_replace("\n", "", $string);
    $string = trim($string); 
    return $string;
}

// Hämta X-Forwarded-For och REMOTE_ADDR
$xfwd = $_SERVER["HTTP_X_FORWARDED_FOR"] ?? '';
$remoteAddr = $_SERVER["REMOTE_ADDR"] ?? '';

// Initiera variabler för IPv4 och IPv6
$ipv4 = null;
$ipv6 = null;

// Om X-Forwarded-For är satt, kan det innehålla flera IP-adresser, separerade med komma
if ($xfwd) {
    $ips = array_map('trim', explode(',', $xfwd));
    foreach ($ips as $ip) {
        $ip = filter_var($ip, FILTER_VALIDATE_IP);
        if ($ip) {
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                $ipv4 = $ip;
            } elseif (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                $ipv6 = $ip;
            }
        }
    }
}

// Om ingen giltig IP hittats i X-Forwarded-For, använd REMOTE_ADDR
if (!$ipv4 && !$ipv6 && $remoteAddr) {
    $validated = filter_var($remoteAddr, FILTER_VALIDATE_IP);
    if ($validated) {
        if (filter_var($validated, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $ipv4 = $validated;
        } elseif (filter_var($validated, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            $ipv6 = $validated;
        }
    }
}

// För backwards-kompatibilitet sätter vi $IP till IPv4 om den finns, annars IPv6, annars 'N/A'
if ($ipv4) {
    $IP = $ipv4;
} elseif ($ipv6) {
    $IP = $ipv6;
} else {
    $IP = 'N/A';
}

// Hämta övrig information
$port     = mm_strip($_SERVER["REMOTE_PORT"]   ?? '');
$protocol = mm_strip($_SERVER["SERVER_PROTOCOL"] ?? '');
$agent    = mm_strip($_SERVER["HTTP_USER_AGENT"] ?? '');

// Hämta host-information baserat på IPv4 om det finns, annars IPv6
if ($ipv4) {
    $host = gethostbyaddr($ipv4);
} elseif ($ipv6) {
    $host = gethostbyaddr($ipv6);
} else {
    $host = 'N/A';
}
?>