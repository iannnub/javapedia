<?php
session_start();
if (!isset($_SESSION['nama'])) {
    die("Anda Belum Login");
}
if ($_SESSION['level'] != "admin") {
    die("Anda bukan admin");
}
?>
<?php
require 'function1.php';
$data = query("SELECT * FROM data_pubg ORDER BY id_pubg DESC");
if (isset($_POST["cari"])) {
    $data = cari($_POST["search"]);
}
?>
<?php

require '../includes2/header.php';
require '../includes2/sidebar.php';
require '../includes2/navbar.php';

?>
<div class="container mt-5">

    <body id="page-top">
        <div class="card shadow-3 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="input-group mb-3 col-3">
                        <input type="text" name="search" class="form-control" placeholder="Cari ID/Nick" autocomplete="off">
                        <button type="submit" name="cari" class="btn btn-outline-primary">Cari</button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">ID Akun</th>
                                <th class="text-center">Login Via</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Paket Pubg</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Bukti Transaksi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $kamar) {

                                // Menentukan status dan warna berdasarkan status
                                if ($kamar["status"] == "antrian") {
                                    $status = "antrian";
                                    $warna = "badge bg-warning";
                                } else if ($kamar["status"] == "proses") {
                                    $status = "proses";
                                    $warna = "badge bg-info";
                                } else if ($kamar["status"] == "selesai") {
                                    $status = "selesai";
                                    $warna = "badge bg-success";
                                } else {
                                    // Default untuk status yang tidak diketahui
                                    $status = "tidak diketahui";
                                    $warna = "badge bg-secondary";
                                }
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $kamar['userid_pubg']; ?></td>
                                    <td class="text-center"><?php echo $kamar['login_pubg']; ?></td>
                                    <td class="text-center"><?php echo $kamar['email_pubg']; ?></td>
                                    <td class="text-center"><?php echo $kamar['pw_pubg']; ?></td>
                                    <td class="text-center"><?php echo $kamar['paket_pubg']; ?></td>
                                    <td class="text-center">
                                    <!-- Tambahkan link untuk membuka modal edit status -->
                                    <a href="#" data-toggle="modal" data-target="#statusModal<?php echo $kamar['id_pubg']; ?>">
                                        <span class="<?php echo $warna; ?>" style="cursor: pointer;"> <?php echo $status; ?> </span>
                                    </a>

                                    <!-- Modal untuk mengubah status -->
                                    <div class="modal fade" id="statusModal<?php echo $kamar['id_pubg']; ?>" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel<?php echo $kamar['id_pubg']; ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="statusModalLabel<?php echo $kamar['id_pubg']; ?>">Update pesanan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="simpan_prosespubg.php" method="post">
                                                        <input type="hidden" name="id_pubg" value="<?php echo $kamar['id_pubg']; ?>">
                                                        <div class="form-group">
                                                            <label for="status">Pilih Status</label>
                                                            <select class="form-control" name="status" id="status">
                                                                <option value="antrian" <?php echo $kamar['status'] == 'antrian' ? 'selected' : ''; ?>>Antrian</option>
                                                                <option value="proses" <?php echo $kamar['status'] == 'proses' ? 'selected' : ''; ?>>Proses</option>
                                                                <option value="selesai" <?php echo $kamar['status'] == 'selesai' ? 'selected' : ''; ?>>Selesai</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="text-center">
                                        <!-- Tambahkan link untuk membuka modal -->
                                        <a href="#" data-toggle="modal" data-target="#fotoModal<?php echo $kamar['id_pubg']; ?>">
                                            <img src="../fotopubg/<?php echo $kamar['foto_pubg']; ?>" width="70" style="cursor: pointer;">
                                        </a>

                                        <!-- Modal untuk menampilkan foto -->
                                        <div class="modal fade" id="fotoModal<?php echo $kamar['id_pubg']; ?>" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel<?php echo $kamar['id_pubg']; ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="fotoModalLabel<?php echo $kamar['id_pubg']; ?>">Foto Bukti Transaksi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="../fotopubg/<?php echo $kamar['foto_pubg']; ?>" class="img-fluid" alt="Bukti Transaksi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    
                                    <td class="text-center">

                                        <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#delete<?php echo $kamar['id_pubg']; ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <div class="modal fade" id="delete<?php echo $kamar['id_pubg']; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form class="text-center">
                                                        <img src="../assets/2.png" alt="...">
                                                        <b>
                                                            <font face="times new roman">
                                                                <h6>Yakin Akan Menghapus Data Ini?</h6>
                                                            </font>
                                                        </b>
                                                        <div class="form-group cols-sm-6">
                                                            <button class="btn btn-warning" data-dismiss="modal">Tidak</button>
                                                            <a href="delete_akunpubg.php?id=<?php echo $kamar['id_pubg']; ?>" class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</div>

<?php
require '../includes2/footer.php';
?>