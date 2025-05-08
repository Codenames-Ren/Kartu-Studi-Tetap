<style>
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        thead {
            background-color: #3498db;
            color: white;
        }
        
        th {
            padding: 15px;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        th a {
          text-decoration: none;
          color: white;
        }

        th a:hover {
          color: cyan;
          transition: 0.3s ease;
        }
        
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        td a {
          text-decoration: none;
          color: white;
          /* border: 1px solid black; */
          background-color: #45a049;
          transform: translateY(-2px);
          box-shadow: 0 4px 8px rgba(0,0,0,0.2);
          border-radius: 10%;
          padding: 5px
        }

        td a:hover {
          background-color:rgb(31, 193, 39);
          transform: translateX(-2px -2px);
          transition: 0.3s ease;
        }
        
        /* Zebra stripe effect */
        tbody tr:nth-child(even) {
            background-color: #f2f7fd;
        }
        
        tbody tr:hover {
            background-color: #e8f4f8;
            transition: background-color 0.3s ease;
        }
        
        .action-btn {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .action-btn:hover {
            background-color: #e74c3c;
            color: white;
        }
        
        .input-btn {
            display: inline-block;
            padding: 10px 18px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .input-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .btn-container {
            width: 100%;
            text-align: right;
            margin-top: 20px;
        }
    </style>

<article>
        <h1>Data Dosen</h1>
        <table border="1" width="100%">
          <thead>
            <tr>
              <th width="5%">NO</th>
              <th width="10%">NID</th>
              <th width="50%">NAMA DOSEN</th>
              <th width="20%">PENDIDIKAN</th>
              <th width="15%"><a href="bayudosentambah.php">TINDAKAN</a></th>
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
        <!-- <div style="width: 100%; text-align: right; margin-top: 20px;">
          <a href="bayudoseninput.php" style="display: inline-block; padding: 8px 16px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">+ Input Data</a>
      </div> -->
      </article>