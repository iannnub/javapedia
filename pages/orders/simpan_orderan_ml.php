<?php 
require '../../koneksi.php';

// Ambil data dari form
$a = $_POST['login_ml'];
$b = $_POST['email_ml']; 
$c = $_POST['userid_ml'];
$d = $_POST['pw_ml'];
$f = $_POST['paket_ml'];
$g = $_POST['req_hero'];
$h = $_POST['note_ml'];


// Proses file foto
$foto = $_FILES['foto_ml']['name'];
$tmp_name = $_FILES['foto_ml']['tmp_name'];
$size = $_FILES['foto_ml']['size'];
$type = $_FILES['foto_ml']['type'];

// Direktori tujuan penyimpanan file
$upload_dir = '../../fotoml/'; // Pastikan folder 'uploads/' ada dan memiliki izin tulis
$target_file = $upload_dir . basename($foto);

// Validasi file (opsional)
if ($size > 15000000) { // Maksimal 15MB
    echo "Ukuran file terlalu besar.";
    exit;
}

$allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
if (!in_array($type, $allowed_types)) {
    echo "Format file tidak didukung. Hanya JPG, PNG, dan GIF yang diperbolehkan.";
    exit;
}

// Pindahkan file ke direktori tujuan
if (move_uploaded_file($tmp_name, $target_file)) {
    // Simpan data ke database
    $sql = mysqli_query($koneksi, "INSERT INTO data_ml(login_ml, email_ml, userid_ml, pw_ml, foto_ml, paket_ml, req_hero, note_ml) VALUES('$a', '$b', '$c', '$d', '$foto', '$f', '$g', '$h')");

    if ($sql) {
        session_start();
        $_SESSION['berhasil'] = '<div class="alert alert-success" role="alert">
            Data berhasil disimpan.
        </div>';
        header('location:../../index.php');
    } else {
        echo "Terjadi kesalahan saat menyimpan data.";
    }
} else {
    echo "Gagal mengunggah file.";
}
?>
