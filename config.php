<?php 

$protocol = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$isLocalhost = in_array($domain, ['localhost', '127.0.0.1']);

$subfolder = $isLocalhost ? '/jp' : '';
$BASE_URL = $protocol . '://' . $domain . $subfolder;
$currentPage = $_SERVER['REQUEST_URI'];

?>