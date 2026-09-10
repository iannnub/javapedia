<?php 
require '../../koneksi.php';

// Ambil data dari form
$a = $_POST['login_pubg'];
$b = $_POST['email_pubg']; 
$c = $_POST['userid_pubg'];
$d = $_POST['pw_pubg'];
$f = $_POST['paket_pubg'];

// Proses file foto
$foto = $_FILES['foto_pubg']['name'];
$tmp_name = $_FILES['foto_pubg']['tmp_name'];
$size = $_FILES['foto_pubg']['size'];
$type = $_FILES['foto_pubg']['type'];

// Direktori tujuan penyimpanan file
$upload_dir = '../../fotopubg/'; // Pastikan folder 'uploads/' ada dan memiliki izin tulis
$target_file = $upload_dir . basename($foto);

// Validasi file (opsional)
if ($size > 15000000) { // Maksimal 15MB
    echo "Ukuran file terlalu besar.";
    exit;
}

$allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
if (!in_array($type, $allowed_types)) {
    echo "Silahkan Masukkan Bukti Transaksi.";
    exit;
}

// Pindahkan file ke direktori tujuan
if (move_uploaded_file($tmp_name, $target_file)) {
    // Simpan data ke database
    $sql = mysqli_query($koneksi, "INSERT INTO data_pubg(login_pubg, email_pubg, userid_pubg, pw_pubg, foto_pubg, paket_pubg) VALUES('$a', '$b', '$c', '$d', '$foto', '$f')");

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
