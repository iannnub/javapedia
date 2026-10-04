<?php 
require_once '../../koneksi.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Metode request tidak diizinkan.']);
    exit;
}

$login_ml  = trim($_POST['login_ml'] ?? '');
$email_ml  = trim($_POST['email_ml'] ?? '');
$userid_ml = trim($_POST['userid_ml'] ?? '');
$pw_ml     = trim($_POST['pw_ml'] ?? '');
$paket_ml  = trim($_POST['paket_ml'] ?? '');
$req_hero  = trim($_POST['req_hero'] ?? '');
$note_ml   = trim($_POST['note_ml'] ?? '');

if ($login_ml === '' || $email_ml === '' || $userid_ml === '' || $pw_ml === '' || $paket_ml === '') {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Semua kolom wajib diisi lengkap.']);
    exit;
}

if (!isset($_FILES['foto_ml']) || $_FILES['foto_ml']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Bukti transaksi wajib diunggah.']);
    exit;
}

$tmp_name = $_FILES['foto_ml']['tmp_name'];
$size     = $_FILES['foto_ml']['size'];

// Max size: 15MB
if ($size > 15 * 1024 * 1024) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Ukuran file terlalu besar, maksimal 15MB.']);
    exit;
}

// Verify that file is a genuine image
$imgInfo = @getimagesize($tmp_name);
if ($imgInfo === false) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Berkas yang diunggah bukan gambar valid.']);
    exit;
}

$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
if (!in_array($imgInfo['mime'], $allowedMimeTypes, true)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Format file tidak didukung. Harap gunakan format JPG, PNG, atau WebP.']);
    exit;
}

$rawExt = pathinfo($_FILES['foto_ml']['name'], PATHINFO_EXTENSION);
$ext = strtolower($rawExt);
if (!in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'], true)) {
    $ext = 'jpg';
}

$upload_dir = realpath(__DIR__ . '/../../fotoml');
if (!$upload_dir || !is_dir($upload_dir)) {
    $upload_dir = __DIR__ . '/../../fotoml';
    if (!is_dir($upload_dir)) {
        @mkdir($upload_dir, 0755, true);
    }
}

$safeFilename = 'proof_ml_' . time() . '_' . bin2hex(random_bytes(6)) . '.' . $ext;
$targetPath = rtrim($upload_dir, '/\\') . DIRECTORY_SEPARATOR . $safeFilename;

if (!move_uploaded_file($tmp_name, $targetPath)) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan berkas ke server. Pastikan folder fotoml memiliki izin tulis.']);
    exit;
}

// Insert into database using prepared statement
$stmt = mysqli_prepare(
    $koneksi, 
    "INSERT INTO data_ml (login_ml, email_ml, userid_ml, pw_ml, foto_ml, paket_ml, req_hero, note_ml, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'antrian')"
);

if (!$stmt) {
    @unlink($targetPath);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Kesalahan internal database saat menyiapkan data.']);
    exit;
}

mysqli_stmt_bind_param($stmt, "ssssssss", $login_ml, $email_ml, $userid_ml, $pw_ml, $safeFilename, $paket_ml, $req_hero, $note_ml);
$executed = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($executed) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Pesanan berhasil dikirim! Mohon tunggu konfirmasi pengerjaan dari admin.'
    ]);
} else {
    @unlink($targetPath);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan pesanan ke database.']);
}
exit;
?>
