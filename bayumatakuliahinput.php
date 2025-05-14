<?php
include 'bayukoneksi.php';

if (isset($_POST['submit'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $sks = $_POST['sks'];

  $check_query = "SELECT bayuMatKode FROM bayumatkul WHERE bayuMatKode = '$kode'";
  $check_result = mysqli_query($koneksi, $check_query);

  if (mysqli_num_rows($check_result) > 0) {
    echo "<script>alert('Kode $kode sudah terdaftar!'); window.location='matakuliahtampil.php';</script>";
    exit();
  }

  $query = "INSERT INTO bayumatkul (bayuMatKode, bayuMatNama, bayuMatSks) 
            VALUES ('$kode', '$nama', '$sks')";

  if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='matakuliahtampil.php';</script>";
  } else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
  }
}
?>

<style>
  .matkul-container {
    display: flex;
    justify-content: center;
    padding-top: -10px;
    margin-bottom: 60px;
  }

  .matkul-form {
    background-color: rgb(74, 177, 246);
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    width: 500px;
    padding: 50px;
  }

  .matkul-form h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 22px;
    color: white;
  }

  .matkul-form .form-group {
    margin-bottom: 20px;
  }

  .matkul-form .form-group label {
    font-weight: 600;
    margin-bottom: 10px;
    display: block;
    color: white;
  }

  .matkul-form .form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
  }

  .btn-submit {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
    margin-top: 10px;
  }

  .btn-submit:hover {
    background-color: #45a049;
  }
</style>

<article>
  <div class="wrapper">
  <div class="matkul-container" style="margin-top: 40px;">
    <div class="matkul-form">
      <h2>Form Input Data Mata Kuliah</h2>
      <form method="POST" action="">
        <div class="form-group">
          <label for="kode">KODE MK :</label>
          <input type="text" id="kode" name="kode" required>
        </div>
        <div class="form-group">
          <label for="nama">Mata Kuliah :</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="sks">SKS :</label>
          <input type="text" id="sks" name="sks" required>
        </div>
        <input class="btn-submit" type="submit" name="submit" value="Simpan">
      </form>
    </div>
  </div>
</div>
</article>