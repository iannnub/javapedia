<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['level'] !== "admin") {
    header("Location: ../index2.php");
    exit;
}

require_once '../koneksi.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    // Delete associated proof image if present
    $photoStmt = mysqli_prepare($koneksi, "SELECT foto_ml FROM data_ml WHERE id_ml = ? LIMIT 1");
    if ($photoStmt) {
        mysqli_stmt_bind_param($photoStmt, "i", $id);
        mysqli_stmt_execute($photoStmt);
        $res = mysqli_stmt_get_result($photoStmt);
        if ($row = mysqli_fetch_assoc($res)) {
            $filename = basename($row['foto_ml'] ?? '');
            if ($filename !== '') {
                $filePath = __DIR__ . '/../fotoml/' . $filename;
                if (file_exists($filePath)) {
                    @unlink($filePath);
                }
            }
        }
        mysqli_stmt_close($photoStmt);
    }

    $delStmt = mysqli_prepare($koneksi, "DELETE FROM data_ml WHERE id_ml = ?");
    if ($delStmt) {
        mysqli_stmt_bind_param($delStmt, "i", $id);
        mysqli_stmt_execute($delStmt);
        mysqli_stmt_close($delStmt);
    }
}

header("Location: dataml.php");
exit;
?>