<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['level'] !== "admin") {
    header("Location: ../index2.php");
    exit;
}

require_once '../koneksi.php';

// Calculate order statistics
$ml_antrian = 0; $ml_proses = 0; $ml_selesai = 0; $ml_total = 0;
$pubg_antrian = 0; $pubg_proses = 0; $pubg_selesai = 0; $pubg_total = 0;

$qML = mysqli_query($koneksi, "SELECT status, COUNT(*) as cnt FROM data_ml GROUP BY status");
if ($qML) {
    while ($r = mysqli_fetch_assoc($qML)) {
        if ($r['status'] === 'antrian') $ml_antrian = (int)$r['cnt'];
        if ($r['status'] === 'proses') $ml_proses = (int)$r['cnt'];
        if ($r['status'] === 'selesai') $ml_selesai = (int)$r['cnt'];
        $ml_total += (int)$r['cnt'];
    }
}

$qPUBG = mysqli_query($koneksi, "SELECT status, COUNT(*) as cnt FROM data_pubg GROUP BY status");
if ($qPUBG) {
    while ($r = mysqli_fetch_assoc($qPUBG)) {
        if ($r['status'] === 'antrian') $pubg_antrian = (int)$r['cnt'];
        if ($r['status'] === 'proses') $pubg_proses = (int)$r['cnt'];
        if ($r['status'] === 'selesai') $pubg_selesai = (int)$r['cnt'];
        $pubg_total += (int)$r['cnt'];
    }
}

require '../includes2/header.php';
require '../includes2/sidebar.php';
require '../includes2/navbar.php';
?>

<div class="container-fluid mt-4">
    <!-- Welcome Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Utama</h1>
        <span class="badge badge-primary p-2">Login sebagai: <?php echo htmlspecialchars($_SESSION['nama']); ?></span>
    </div>

    <!-- Alert Welcome -->
    <div class="alert alert-primary shadow-sm" role="alert">
        <h4 class="alert-heading">Selamat Datang di Panel Administrator JAVAPEDIA!</h4>
        <p class="mb-0">Platform manajemen pesanan jasa joki game online profesional. Pantau antrean, perbarui status pengerjaan, dan kelola transaksi pelanggan secara terpusat.</p>
    </div>

    <!-- Statistics Row: Mobile Legends -->
    <h5 class="text-gray-700 font-weight-bold mb-3 mt-4"><i class="fas fa-gamepad text-primary"></i> Statistik Mobile Legends</h5>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">MLBB (Antrian)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ml_antrian; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MLBB (Proses)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ml_proses; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">MLBB (Selesai)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ml_selesai; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pesanan MLBB</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ml_total; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="dataml.php" class="btn btn-sm btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Row: PUBG Mobile -->
    <h5 class="text-gray-700 font-weight-bold mb-3 mt-3"><i class="fas fa-crosshairs text-danger"></i> Statistik PUBG Mobile</h5>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">PUBGM (Antrian)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pubg_antrian; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PUBGM (Proses)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pubg_proses; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PUBGM (Selesai)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pubg_selesai; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pesanan PUBGM</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pubg_total; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="data_pubg.php" class="btn btn-sm btn-outline-danger">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require '../includes2/footer.php'; 
?>