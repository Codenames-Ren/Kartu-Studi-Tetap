<article>
        <h1>Data Mata Kuliah</h1>
</a>
        <table border="1" width="100%">
          <thead>
            <tr>
              <th width="5%">NO</th>
              <th width="10%">KODE</th>
              <th width="50%">MATA KULIAH</th>
              <th width="20%">SKS</th>
              <th width="15%">TINDAKAN</th>
            </tr>
          </thead>
          <tbody align="center">
            <?php
            $no=1;
            include 'bayukoneksi.php';
            $bayudata = mysqli_query($koneksi, "SELECT * FROM bayumatkul");
            while($bayud = mysqli_fetch_array($bayudata)) {
              ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $bayud['bayuMatKode']; ?></td>
              <td><?php echo $bayud['bayuMatNama']; ?></td>
              <td><?php echo $bayud['bayuMatSks']; ?></td>
              <td><a href="bayumatakuliahhapus.php?id=<?php echo $bayud['bayuMatKode']; ?>">HAPUS</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      <div style="width: 100%; text-align: right; margin-top: 20px;">
          <a href="bayumatakuliahinput.php" style="display: inline-block; padding: 8px 16px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">+ Input Data</a>
      </div>
      </article>