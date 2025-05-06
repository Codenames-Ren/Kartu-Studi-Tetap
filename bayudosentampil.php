<article>
        <h1>Data Dosen</h1>
        <table border="1" width="100%">
          <thead>
            <tr>
              <th width="5%">NO</th>
              <th width="10%">NID</th>
              <th width="50%">NAMA DOSEN</th>
              <th width="20%">PENDIDIKAN</th>
              <th width="15%">TINDAKAN</th>
            </tr>
          </thead>
          <tbody align="center">
            <?php
            $no=1;
            include 'bayukoneksi.php';
            $bayudata = mysqli_query($koneksi, "SELECT * FROM bayudosen");
            while($bayud = mysqli_fetch_array($bayudata)) {
              ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $bayud['bayuDosNid']; ?></td>
              <td><?php echo $bayud['bayuDosNama']; ?></td>
              <td><?php echo $bayud['bayuDosPendidikan']; ?></td>
              <td><a href="bayudosenhapus.php?id=<?php echo $bayud['bayuDosNid']; ?>">HAPUS</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <div style="width: 100%; text-align: right; margin-top: 20px;">
          <a href="bayudoseninput.php" style="display: inline-block; padding: 8px 16px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">+ Input Data</a>
      </div>
      </article>