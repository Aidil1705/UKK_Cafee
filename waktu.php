<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    
  <?php
  include "sidebarad.php"
  ?>
  <div class="data">
</br>
</br>
<select id="" name="" onchange="location = this.value;">
                    <option value="waktu.php">Berdasarkan Waktu</option>
			        <option value="namakasir.php">Berdasarkan Nama Kasir</option>
			      
			      </select>
</br>
    <table class="tb_transaksi" border="1">
            <tr>
                <th>No</th>
                <th>No Meja</th>
                <th>Pesanan</th>
                <th>Total Harga </th>
                <th>Nama Kasir</th>
                <th>Id Kasir</th>
                <th>No Transaksi</th>
                <th>Alat</th>
            </tr>
    <?php
    include "koneksi.php";
    $qry = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY create_at");
    $nomor = 1;
    while($hasil = mysqli_fetch_array($qry)){
    
    ?>
   
        
            <tr>
                <td><?= $nomor++?></td>
                <td><?= $hasil['nomeja']?></td>
                <td><?= $hasil['pesanan']?></td>
                <td><?= $hasil['total_harga']?></td>
                <td><?= $hasil['nama_kasir']?></td>
                <td><?= $hasil['id_kasir']?></td>
                <td><?= $hasil['create_at']?></td>
                <td>
                <a href="edittransaksi.php?id=<?= $hasil['id'];?>">Edit</a>/<a href="hapustransaksi.php?id=<?= $hasil['id'];?>">Hapus</a>
                </td>
            </tr>
            <?php }?>
        </table>
        </br>

    </div>
    
</body>
</html>