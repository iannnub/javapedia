<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['level'] !== "admin") {
    header("Location: ../index2.php");
    exit;
}

require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id_ml', FILTER_VALIDATE_INT);
    $status = trim($_POST['status'] ?? '');
    
    $allowedStatus = ['antrian', 'proses', 'selesai'];
    if ($id && in_array($status, $allowedStatus, true)) {
        $stmt = mysqli_prepare($koneksi, "UPDATE data_ml SET status = ? WHERE id_ml = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "si", $status, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }
}

header("Location: dataml.php");
exit;
?>
