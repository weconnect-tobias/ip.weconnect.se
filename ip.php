<?php
declare(strict_types=1);

function validateAndNormalizeIP(string $ip): ?string {
    // Trimma och kontrollera att IP inte är tom
    $ip = trim($ip);
    if (empty($ip)) {
        return null;
    }
    
    // Validera IP och exkludera privata/reserverade adresser
    $flags = FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
    if (!filter_var($ip, FILTER_VALIDATE_IP, $flags)) {
        return null;
    }
    
    // Normalisera IP-notation (både IPv4 och IPv6)
    $packed = inet_pton($ip);
    if ($packed === false) {
        return null;
    }
    
    $normalized = inet_ntop($packed);
    if ($normalized === false) {
        return null;
    }
    
    return $normalized;
}

function getClientIP(): ?string {
    $headers = [
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_REAL_IP',
        'HTTP_CLIENT_IP',
        'REMOTE_ADDR'
    ];
    
    foreach ($headers as $header) {
        if (empty($_SERVER[$header])) {
            continue;
        }
        
        // Hantera kommaseparerade IP-adresser
        $ipList = explode(',', $_SERVER[$header]);
        
        foreach ($ipList as $ip) {
            $validatedIP = validateAndNormalizeIP($ip);
            if ($validatedIP !== null) {
                return $validatedIP;
            }
        }
    }
    
    return null;
}

$ipaddress = getClientIP();  // supertyp: antingen IPv4 eller IPv6 beroende på vad REMOTE_ADDR är
?>