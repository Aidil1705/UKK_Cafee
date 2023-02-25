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

    <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Level</th>
                <th>Password</th>
                <th>Alat</th>
            </tr>
    <?php
    include "koneksi.php";
    $qry = mysqli_query($conn, "SELECT * FROM pengguna ");
    $nomor = 1;
    while($hasil = mysqli_fetch_array($qry)){
    
    ?>
   
        
            <tr>
                <td><?= $nomor++?></td>
                <td><?= $hasil['nama']?></td>
                <td><?= $hasil['username']?></td>
                <td><?= $hasil['level']?></td>
                <td><?= $hasil['password']?></td>
                <td>
                    <a href="edituser.php?id=<?= $hasil['id'];?>">Edit</a>/<a href="hapususer.php?id=<?= $hasil['id'];?>">Hapus</a>

                </td>
            </tr>
            <?php }?>
        </table>
        </br>
        <a href="tambahuser.php"><button type="submit">Tambah User</button></a>
    </div>
    
</body>
</html>