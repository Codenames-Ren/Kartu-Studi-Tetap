<?php
include 'bayukoneksi.php';

if (isset($_GET['id'])) {
    $kode = $_GET['id'];

    //query hpus
    $query = "DELETE FROM bayumatkul where bayuMatKode = '$kode'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='bayumatakuliah.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='bayumatakuliah.php';</script>";
}
?>