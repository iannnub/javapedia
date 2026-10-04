<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['level'] !== "admin") {
    header("Location: ../index2.php");
    exit;
}

require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id_pubg', FILTER_VALIDATE_INT);
    $status = trim($_POST['status'] ?? '');
    
    $allowedStatus = ['antrian', 'proses', 'selesai'];
    if ($id && in_array($status, $allowedStatus, true)) {
        $stmt = mysqli_prepare($koneksi, "UPDATE data_pubg SET status = ? WHERE id_pubg = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "si", $status, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }
}

header("Location: data_pubg.php");
exit;
?>
