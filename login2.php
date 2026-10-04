<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index2.php');
    exit;
}

$user = trim($_POST['username'] ?? '');
$pass = trim($_POST['password'] ?? '');

if ($user === '' || $pass === '') {
    echo "<script>alert('Username dan password wajib diisi!'); window.location='index2.php';</script>";
    exit;
}

$stmt = mysqli_prepare($koneksi, "SELECT id_admin, username, password, level, nama FROM admin WHERE username = ? LIMIT 1");
if (!$stmt) {
    error_log("Login query preparation failed: " . mysqli_error($koneksi));
    echo "<script>alert('Terjadi kesalahan pada sistem. Silakan coba beberapa saat lagi.'); window.location='index2.php';</script>";
    exit;
}

mysqli_stmt_bind_param($stmt, "s", $user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($data = mysqli_fetch_assoc($result)) {
    $isValidPassword = password_verify($pass, $data['password']);

    // Backward compatibility: If password matches plaintext, upgrade hash immediately
    if (!$isValidPassword && $pass === $data['password']) {
        $isValidPassword = true;
        $newHash = password_hash($pass, PASSWORD_DEFAULT);
        $updateStmt = mysqli_prepare($koneksi, "UPDATE admin SET password = ? WHERE id_admin = ?");
        if ($updateStmt) {
            mysqli_stmt_bind_param($updateStmt, "si", $newHash, $data['id_admin']);
            mysqli_stmt_execute($updateStmt);
            mysqli_stmt_close($updateStmt);
        }
    }

    if ($isValidPassword && $data['level'] === 'admin') {
        session_regenerate_id(true);
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['user'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['login_time'] = time();

        header('Location: admin/admin.php');
        exit;
    }
}

mysqli_stmt_close($stmt);

echo "<script>alert('Username atau Password tidak valid!'); window.location='index2.php';</script>";
exit;
?>