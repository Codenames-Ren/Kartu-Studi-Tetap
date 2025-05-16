<?php
include 'bayukoneksi.php';

if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $kota = $_POST['kota'];
  $alamat = $_POST['alamat'];

  $query = "INSERT INTO bayumahasiswa (bayuMahNim, bayuMahNama, bayuMahProdi, bayuMahKota, bayuMahAlamat) 
            VALUES ('$nim', '$nama', '$prodi', '$kota', '$alamat')";

  $check_query = "SELECT bayuMahNim FROM bayumahasiswa WHERE bayuMahNim = '$nim'";
  $check_result = mysqli_query($koneksi, $check_query);

  if (mysqli_num_rows($check_result) >0) {
    echo "<script>alert('NIM $nim sudah terdaftar!');
    window.location='bayumahasiswa.php';</script>";
    exit();
  }

  if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='bayumahasiswa.php';</script>";
  } else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
  }
}
?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
  *{
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .mahasiswa-container {
    display: flex;
    justify-content: center;
    padding-top: -10px;
    margin-bottom: 60px;
  }

  .mahasiswa-form {
    background-color: rgb(74, 177, 246);
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    width: 800px;
    /* height: 850px; */
    padding: 50px;
  }

  .mahasiswa-form h2 {
    text-align: center;
    margin-bottom: 35px;
    font-size: 32px;
    color: white;
  }

  .mahasiswa-form .form-group {
    margin-bottom: 25px;
  }

  .mahasiswa-form .form-group label {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 10px;
    display: block;
    color: white;
  }

  .mahasiswa-form .form-group input {
    width: 100%;
    font-size: 18px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
  }

  .mahasiswa-form .form-group textarea {
    width: 100%;
    font-size: 15px;
    padding: 15px;
    border: 1px solid #ddd;
    resize: vertical;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-sizing: border-box;
  }

  .btn-submit {
    background-color: #4CAF50;
    color: white;
    font-size: 20px;
    border: none;
    padding: 25px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
    margin-top: 15px;
  }

  .btn-submit:hover {
    background-color: #45a049;
  }
</style>

<article>
  <div class="wrapper">
  <div class="mahasiswa-container" >
    <div class="mahasiswa-form">
      <h2>Form Input Data Mahasiswa</h2>
      <form method="POST" action="">
        <div class="form-group">
          <label for="nim">NIM :</label>
          <input type="text" id="nim" name="nim" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="prodi">Prodi :</label>
          <input type="text" id="prodi" name="prodi" required>
        </div>
        <div class="form-group">
          <label for="kota">Kota :</label>
          <input type="text" id="kota" name="kota" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Lengkap :</label>
          <textarea id="alamat" name="alamat" required></textarea>
        </div>
        <input class="btn-submit" type="submit" name="submit" value="Simpan">
      </form>
    </div>
  </div>
</div>
</article>