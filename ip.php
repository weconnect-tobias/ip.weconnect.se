<?php
declare(strict_types=1);

/**
 * Validera en IP-adress och returnera den om den är publik (ej privat/reserverad).
 */
function validatePublicIP(string $ip): ?string {
    $ip = trim($ip);
    if (empty($ip)) return null;

    $flags = FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
    return filter_var($ip, FILTER_VALIDATE_IP, $flags) ?: null;
}

/**
 * Extrahera IPv4 och IPv6 separat från tillgängliga headers.
 */
function getClientIPs(): array {
    $headers = [
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_REAL_IP',
        'HTTP_CLIENT_IP',
        'REMOTE_ADDR'
    ];

    $ipv4 = null;
    $ipv6 = null;

    foreach ($headers as $header) {
        if (empty($_SERVER[$header])) continue;

        // Hantera flera IP:n i samma header
        $ipList = explode(',', $_SERVER[$header]);

        foreach ($ipList as $ip) {
            $ip = validatePublicIP($ip);
            if (!$ip) continue;

            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) && !$ipv4) {
                $ipv4 = $ip;
            }

            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) && !$ipv6) {
                $ipv6 = $ip;
            }

            if ($ipv4 && $ipv6) break 2; // Avsluta tidigt om båda hittats
        }
    }

    return [
        'ipv4' => $ipv4,
        'ipv6' => $ipv6
    ];
}

// Hämtar IP-adresser och gör tillgängliga som variabler
$clientIPs = getClientIPs();
$ipv4 = $clientIPs['ipv4'];
$ipv6 = $clientIPs['ipv6'];
?>
