<?php
include 'bayukoneksi.php';

if (isset($_POST['submit'])) {
  $nid = $_POST['nid'];
  $nama = $_POST['nama'];
  $pendidikan = $_POST['pendidikan'];

  $check_query = "SELECT bayuDosNid FROM bayudosen WHERE bayuDosNid = '$nid'";
  $check_result = mysqli_query($koneksi, $check_query);

  if (mysqli_num_rows($check_result) > 0) {
    $update_query = "UPDATE bayudosen 
                     SET bayuDosNama = '$nama', bayuDosPendidikan = '$pendidikan' 
                     WHERE bayuDosNid = '$nid'";

    if (mysqli_query($koneksi, $update_query)) {
      echo "<script>alert('Data berhasil diubah!'); window.location='bayudosen.php';</script>";
    } else {
      echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
  } else {
    echo "<script>alert('NID $nid tidak ditemukan!'); window.location='bayudosen.php';</script>";
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

  .dosen-container {
    display: flex;
    justify-content: center;
    padding-top: -10px;
    margin-bottom: 60px;
  }

  .dosen-form {
    background-color: rgb(74, 177, 246);
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    width: 800px;
    height: 700px;
    padding: 50px;
  }

  .dosen-form h2 {
    text-align: center;
    margin-bottom: 35px;
    font-size: 32px;
    color: white;
  }

  .dosen-form .form-group {
    margin-bottom: 35px;
  }

  .dosen-form .form-group label {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 10px;
    display: block;
    color: white;
  }

  .dosen-form .form-group input {
   width: 100%;
    font-size: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
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
  <div class="dosen-container" >
    <div class="dosen-form">
      <h2>Form Edit Data Dosen</h2>
      <form method="POST" action="">
        <div class="form-group">
          <label for="nid">NID :</label>
          <input type="text" id="nid" name="nid" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama Dosen:</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="pendidikan">Pendidikan :</label>
          <input type="text" id="pendidikan" name="pendidikan" required>
        </div>
        <input class="btn-submit" type="submit" name="submit" value="Simpan">
      </form>
    </div>
  </div>
</div>
</article>