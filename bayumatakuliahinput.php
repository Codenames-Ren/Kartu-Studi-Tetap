<?php
include 'bayukoneksi.php';

if (isset($_POST['submit'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $sks = $_POST['sks'];

  $query = "INSERT INTO bayumatkul (bayuMatKode, bayuMatNama, bayuMatSks) 
            VALUES ('$kode', '$nama', '$sks')";

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
      font-family: "Poppins", Tahoma, Geneva, Verdana, sans-serif;
      background-color: rgb(138, 206, 255);
      padding: 50px 0;
      margin: 0;
      min-height: 100vh;
    }

    .container {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      padding: 30px;
      margin: 100px auto ;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-top: 0;
      margin-bottom: 25px;
      font-size: 24px;
      background-color: transparent;
    }

    .form-group {
      margin-bottom: 15px;
      background-color: transparent;
    }

    .form-group label {
      font-weight: 600;
      display: block;
      margin-bottom: 5px;
      color: #444;
      font-size: 14px;
      background-color: transparent;
    }

    .form-group input, .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
      background-color: #f9f9f9;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-group input:focus, .form-group textarea:focus {
      border-color: rgb(85, 170, 238);
      outline: none;
      box-shadow: 0 0 0 2px rgba(85, 170, 238, 0.2);
      background-color: white;
    }

    .form-group textarea {
      height: 100px;
      resize: vertical;
    }

    .btn-submit {
      background-color: rgb(66, 139, 202);
      color: white;
      border: none;
      padding: 12px 16px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 15px;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .btn-submit:hover {
      background-color: rgb(51, 122, 183);
    }
  </style>
</head>
<body>
  <div class="container">
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
        <label for="prodi">SKS :</label>
        <input type="text" id="sks" name="sks" required>
      </div>
      <input class="btn-submit" type="submit" name="submit" value="Simpan">
    </form>
  </div>
</body>
</html>