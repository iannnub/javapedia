<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['level'] !== "admin") {
    header("Location: ../index2.php");
    exit;
}

require_once 'function1.php';

$data = query("SELECT * FROM data_pubg ORDER BY id_pubg DESC");
if (isset($_POST["cari"])) {
    $data = cari($_POST["search"] ?? '');
}

require '../includes2/header.php';
require '../includes2/sidebar.php';
require '../includes2/navbar.php';
?>

<div class="container-fluid mt-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Manajemen Pesanan PUBG Mobile</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST" class="mb-3">
                <div class="input-group col-md-4 p-0">
                    <input type="text" name="search" class="form-control" placeholder="Cari ID / Email / Paket" value="<?php echo htmlspecialchars($_POST['search'] ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">ID Akun</th>
                            <th class="text-center">Login Via</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Paket PUBG</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Bukti Transaksi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($data)): ?>
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">Tidak ada data pesanan ditemukan.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($data as $row): 
                                $status = $row["status"];
                                if ($status === "antrian") {
                                    $badgeClass = "badge badge-warning";
                                } elseif ($status === "proses") {
                                    $badgeClass = "badge badge-info";
                                } elseif ($status === "selesai") {
                                    $badgeClass = "badge badge-success";
                                } else {
                                    $badgeClass = "badge badge-secondary";
                                    $status = "tidak diketahui";
                                }
                            ?>
                                <tr>
                                    <td class="text-center font-weight-bold"><?php echo htmlspecialchars($row['userid_pubg']); ?></td>
                                    <td class="text-center"><?php echo htmlspecialchars($row['login_pubg']); ?></td>
                                    <td class="text-center"><?php echo htmlspecialchars($row['email_pubg']); ?></td>
                                    <td class="text-center font-italic text-secondary"><?php echo htmlspecialchars($row['pw_pubg']); ?></td>
                                    <td class="text-center"><?php echo htmlspecialchars($row['paket_pubg']); ?></td>
                                    <td class="text-center">
                                        <a href="#" data-toggle="modal" data-target="#statusModal<?php echo (int)$row['id_pubg']; ?>">
                                            <span class="<?php echo $badgeClass; ?> p-2" style="cursor: pointer;"><?php echo strtoupper($status); ?></span>
                                        </a>

                                        <!-- Modal Ubah Status -->
                                        <div class="modal fade" id="statusModal<?php echo (int)$row['id_pubg']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Status Pesanan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="simpan_prosespubg.php" method="post">
                                                            <input type="hidden" name="id_pubg" value="<?php echo (int)$row['id_pubg']; ?>">
                                                            <div class="form-group">
                                                                <label for="statusSelect<?php echo (int)$row['id_pubg']; ?>">Pilih Status</label>
                                                                <select class="form-control" name="status" id="statusSelect<?php echo (int)$row['id_pubg']; ?>">
                                                                    <option value="antrian" <?php echo $row['status'] === 'antrian' ? 'selected' : ''; ?>>Antrian</option>
                                                                    <option value="proses" <?php echo $row['status'] === 'proses' ? 'selected' : ''; ?>>Proses</option>
                                                                    <option value="selesai" <?php echo $row['status'] === 'selesai' ? 'selected' : ''; ?>>Selesai</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group text-right mb-0">
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
                                        <?php if (!empty($row['foto_pubg'])): ?>
                                            <a href="#" data-toggle="modal" data-target="#fotoModal<?php echo (int)$row['id_pubg']; ?>">
                                                <img src="../fotopubg/<?php echo htmlspecialchars($row['foto_pubg']); ?>" width="60" class="img-thumbnail" style="cursor: pointer;" alt="Bukti">
                                            </a>

                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="fotoModal<?php echo (int)$row['id_pubg']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Bukti Transfer Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="../fotopubg/<?php echo htmlspecialchars($row['foto_pubg']); ?>" class="img-fluid rounded" alt="Bukti Transaksi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <span class="text-muted">Tidak ada foto</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo (int)$row['id_pubg']; ?>">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>

                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteModal<?php echo (int)$row['id_pubg']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <p>Yakin ingin menghapus data pesanan akun <strong><?php echo htmlspecialchars($row['userid_pubg']); ?></strong>?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="delete_akunpubg.php?id=<?php echo (int)$row['id_pubg']; ?>" class="btn btn-danger">Hapus Permanen</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require '../includes2/footer.php';
?>