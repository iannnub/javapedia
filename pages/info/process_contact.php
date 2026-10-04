<?php
require_once '../../koneksi.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Metode request tidak diizinkan.']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Semua kolom wajib diisi.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Format email tidak valid.']);
    exit;
}

$stmt = mysqli_prepare($koneksi, "INSERT INTO contact_messages (name, email, subject, message, status) VALUES (?, ?, ?, ?, 'unread')");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan sistem saat memproses pesan.']);
    exit;
}

mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
$exec = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($exec) {
    echo json_encode(['status' => 'success', 'message' => 'Pesan berhasil terkirim! Tim kami akan segera merespons.']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan pesan ke database.']);
}
exit;
?>
