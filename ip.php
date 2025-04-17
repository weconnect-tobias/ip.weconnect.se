<?php
declare(strict_types=1);

// Hämta och validera klientens IP (endast publika)
function getClientIP(): ?string {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    // Exkludera privata/reserverade nätverk
    $flags = FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
    if (filter_var($ip, FILTER_VALIDATE_IP, $flags)) {
        return inet_ntop(inet_pton($ip));  // normalisera notation
    }
    return null;
}

$ipv4 = getClientIP();  // supertyp: antingen IPv4 eller IPv6 beroende på vad REMOTE_ADDR är
?>