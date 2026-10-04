<?php 
if (!defined('CONFIG_LOADED')) {
    define('CONFIG_LOADED', true);

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    
    $subfolder = '';
    if (preg_match('#^/([^/]+)#', $scriptName, $matches)) {
        $firstSegment = $matches[1];
        $reservedFolders = [
            'pages', 'admin', 'components', 'css', 'js', 'assets', 'assets1', 
            'Login', 'fotoml', 'fotopubg', 'index.php', 'index2.php', 
            'about.php', 'login2.php', 'koneksi.php'
        ];
        if (!in_array($firstSegment, $reservedFolders, true)) {
            $subfolder = '/' . $firstSegment;
        }
    }

    $BASE_URL = rtrim($protocol . '://' . $host . $subfolder, '/');
    $currentPage = $_SERVER['REQUEST_URI'] ?? '';
}
?>