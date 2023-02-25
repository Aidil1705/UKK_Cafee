<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kasir.css">
    <title>Document</title>
</head>
<body>
    
  <?php
  include "sidebarkasir.php"
  ?>
  <div class="isi">
</br>
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
            </tr>
    <?php
    include "koneksi.php";
    $qry = mysqli_query($conn, "SELECT * FROM transaksi ");
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
            </tr>
            <?php }?>
        </table>
        </br>

    </div>
    
</body>
</html>