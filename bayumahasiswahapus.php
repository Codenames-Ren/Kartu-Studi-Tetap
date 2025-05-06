<?php
include 'bayukoneksi.php';

if (isset($_GET['id'])) {
    $nim = $_GET['id'];

    //query hpus
    $query = "DELETE FROM bayumahasiswa where bayuMahNim = '$nim'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='bayumahasiswa.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='bayumahasiswa.php';</script>";
}
?>