<article>
        <h1>Data Mahasiswa</h1>

        <table border="1" width="100%">
          <thead>
            <tr>
              <th width="5%">NO</th>
              <th width="10%">NIM</th>
              <th width="30%">NAMA Mahasiswa</th>
              <th width="20%">PENDIDIKAN</th>
              <th width="15%">KOTA</th>
              <th width="20%">ALAMAT</th>
              <th width="15%">TINDAKAN</th>
            </tr>
          </thead>
          <tbody align="center">
            <?php
            $no=1;
            include 'bayukoneksi.php';
            $bayudata = mysqli_query($koneksi, "SELECT * FROM bayumahasiswa");
            while($bayud = mysqli_fetch_array($bayudata)) {
              ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $bayud['bayuMahNim']; ?></td>
              <td><?php echo $bayud['bayuMahNama']; ?></td>
              <td><?php echo $bayud['bayuMahProdi']; ?></td>
              <td><?php echo $bayud['bayuMahKota']; ?></td>
              <td><?php echo $bayud['bayuMahAlamat']; ?></td>
              <td><a href="bayumahasiswahapus.php?id=<?php echo $bayud['bayuMahNim']; ?>">HAPUS</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <div style="width: 100%; text-align: right; margin-top: 20px;">
          <a href="bayumahasiswainput.php" style="display: inline-block; padding: 8px 16px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">+ Input Data</a>
      </div>
      </article>