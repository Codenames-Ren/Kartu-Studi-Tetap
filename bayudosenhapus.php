<?php
include 'bayukoneksi.php';

if (isset($_GET['id'])) {
    $nid = $_GET['id'];

    //query hpus
    $query = "DELETE FROM bayudosen where bayuDosNid = '$nid'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='bayudosen.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='bayudosen.php';</script>";
}
?>