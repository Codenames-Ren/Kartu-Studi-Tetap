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
    echo "<script>alert('NIM $nim sudah ada dalam database!');
    window.location='bayumahasiswa.php';</script>";
    exit();
  }

  if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
  } else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data Mahasiswa</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      background-color: rgb(138, 206, 255);
    }

    .matkul-container {
      font-family: "Poppins", Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      padding-top: 20px;
      margin-right: 80px; 
    }

    .matkul-form {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      
      padding: 30px;
    }

    .matkul-form h2 {
      text-align: center;
      color: #333;
      margin-top: 0;
      margin-bottom: 25px;
      font-size: 24px;
    }

    .matkul-form .form-group {
      margin-bottom: 20px;
    }

    .matkul-form .form-group label {
      font-weight: 600;
      display: block;
      margin-bottom: 5px;
      color: #444;
      font-size: 14px;
    }

    .matkul-form .form-group input, 
    .matkul-form .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
      background-color: #f9f9f9;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .matkul-form .form-group input:focus, 
    .matkul-form .form-group textarea:focus {
      border-color: rgb(85, 170, 238);
      outline: none;
      box-shadow: 0 0 0 2px rgba(85, 170, 238, 0.2);
      background-color: white;
    }

    .matkul-form .form-group textarea {
      height: 100px;
      resize: vertical;
    }

    .matkul-form .btn-submit {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 12px 16px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 15px;
      font-weight: 600;
      /* margin-top: 35px; */
      transition: background-color 0.3s;
    }

    .matkul-form .btn-submit:hover {
      background-color: rgb(33, 207, 39);
    }
  </style>
</head>
<body>
    <div class="matkul-container">
    <div class="matkul-form">
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
          <label for="kota">Kota:</label>
          <input type="text" id="kota" name="kota" required>
      </div>
      <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required>
      </div>
        <input class="btn-submit" type="submit" name="submit" value="Simpan">
      </form>
    </div>
  </div>
</body>
</html>