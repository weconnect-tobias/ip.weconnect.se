<?php
// Enkel saneringsfunktion
function mm_strip(string $s): string {
    return trim(htmlspecialchars(strip_tags($s), ENT_QUOTES|ENT_HTML5, 'UTF-8'));
}

// Hämta headers
$xfwd       = $_SERVER['HTTP_X_FORWARDED_FOR']  ?? '';
$remoteAddr = $_SERVER['REMOTE_ADDR']          ?? '';

// Initiera
$ipv4 = null;
$ipv6 = null;

// 1) Titta i X-Forwarded-For (kan vara flera adresser comma-separerade)
if ($xfwd) {
    foreach (array_map('trim', explode(',', $xfwd)) as $ip) {
        $ip = filter_var($ip, FILTER_VALIDATE_IP);
        if (!$ip) continue;
        if (!$ipv4 && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $ipv4 = $ip;
        }
        if (!$ipv6 && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            $ipv6 = $ip;
        }
    }
}

// 2) Fallback – använd REMOTE_ADDR för det som saknas
if (!$ipv4 && filter_var($remoteAddr, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $ipv4 = $remoteAddr;
}
if (!$ipv6 && filter_var($remoteAddr, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    $ipv6 = $remoteAddr;
}
?>
