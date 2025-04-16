<?php

// Sanitize user input
$xfwd = filter_var($_SERVER["HTTP_X_FORWARDED_FOR"] ?? '', FILTER_VALIDATE_IP);
$address = filter_var($_SERVER["REMOTE_ADDR"] ?? '', FILTER_VALIDATE_IP);
$port = mm_strip($_SERVER["REMOTE_PORT"] ?? '');
$protocol = mm_strip($_SERVER["SERVER_PROTOCOL"] ?? '');
$agent = mm_strip($_SERVER["HTTP_USER_AGENT"] ?? '');

// Get host information
if ($xfwd !== false) {
	$IP = $xfwd;
	$proxy = $address;
	$host = gethostbyaddr($xfwd);
} else {
	$IP = $address;
	$host = gethostbyaddr($address);
}

// Sanitize user input
function mm_strip(string $string): string {
	$string = trim($string); 
	$string = strip_tags($string);
	$string = htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$string = str_replace("\n", "", $string);
	$string = trim($string); 
	return $string;
}
?>