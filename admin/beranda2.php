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

require '../includes2/header.php';
require '../includes2/sidebar.php';
require '../includes2/navbar.php';

?>
<style>
    .card {
        border-width: 2px;
        border-style: solid;
        border-color: #a0a0a0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        /* Tambahkan properti position relative untuk tombol absolute */
    }
</style>

<?php

require '../koneksi/koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM informasi ORDER BY id_informasi DESC");

while ($data = mysqli_fetch_array($sql)) {

?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 md-5 mb-3">
                <div class="card">


                    <img src="../gambar/<?php echo $data['foto']; ?>" class="card-img-top" alt="Project 11" width="30px" />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['deskripsi']; ?></h5>
                    </div>
                    <div class="card-body card-body d-flex justify-content-end ">
                        <?php echo $data['tgl']; ?>
                    </div>
                    <?php
                    $id_n = $data['id_informasi'];
                    $id_u = $_SESSION['id'];
                    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_like WHERE id_informasi='$id_n'"));
                    $cek2 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_like WHERE id='$id_u' AND id_informasi='$id_n'"));
                    ?>

                    <!-- Tombol "Like" -->
                    <div class="like-comment-container mb-2">
                        <?php if ($cek2 > 0) { ?>
                            <i class="fas fa-thumbs-up"></i> Like</a>
                        <?php } else { ?>
                            <i class="fas fa-thumbs-up"></i> Like</a>
                        <?php } ?>
                        <span><?php echo $cek; ?></span>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php } ?>



<?php require '../includes2/footer.php'; ?>