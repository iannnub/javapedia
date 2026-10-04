<?php
require_once __DIR__ . '/../koneksi.php';

function query($sql)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $sql);
    $rows = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function cari($search)
{
    global $koneksi;
    $searchParam = '%' . trim($search) . '%';
    $stmt = mysqli_prepare(
        $koneksi, 
        "SELECT * FROM data_pubg WHERE userid_pubg LIKE ? OR email_pubg LIKE ? OR paket_pubg LIKE ? ORDER BY id_pubg DESC"
    );
    if (!$stmt) {
        return [];
    }
    mysqli_stmt_bind_param($stmt, "sss", $searchParam, $searchParam, $searchParam);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $rows = [];
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $rows[] = $row;
        }
    }
    mysqli_stmt_close($stmt);
    return $rows;
}
?>
