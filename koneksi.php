<?php
if (!defined('KONEKSI_LOADED')) {
    define('KONEKSI_LOADED', true);

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "java";

    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$koneksi) {
        error_log("Database connection failure: " . mysqli_connect_error());
        die("Koneksi database gagal. Silakan periksa pengaturan database Anda.");
    }

    mysqli_set_charset($koneksi, "utf8mb4");
}
?>