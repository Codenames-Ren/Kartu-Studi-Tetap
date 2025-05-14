<?php
include 'bayukoneksi.php';

if (isset($_POST['submit'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $sks = $_POST['sks'];

  $check_query = "SELECT bayuMatKode FROM bayumatkul WHERE bayuMatKode = '$kode'";
  $check_result = mysqli_query($koneksi, $check_query);

  if (mysqli_num_rows($check_result) >0) {
    echo "<script>alert('KODE $kode sudah ada dalam database!');
    window.location='bayumatakuliah.php';</script>";
    exit();
  }

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
  <title>Form Input Data Matakuliah</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      background-color: rgb(138, 206, 255);
    }

    .matkul-container {
      font-family: "Poppins", Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      padding-top: 50px;
      margin-right: 80px; 
    }

    .matkul-form {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      height: 450px;
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
      margin-top: 35px;
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
</body>
</html>