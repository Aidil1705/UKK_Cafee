<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg">
    <?php
    include "header.php"
    ?>
    <center>
    <h1>Menu </h1>
    </center>
    <center>
    <table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Menu</th>
        <th>Gambar</th>
        <th>Jenis</th>
        <th>Harga</th>

    </tr>
    <?php
    include "koneksi.php";
    $select = mysqli_query($conn, "SELECT * FROM menu WHERE jenis = 'ringan'");
    $nomor = 1;
    while($hasil = mysqli_fetch_array($select)){
        ?>
    <tr>
        <td><?= $nomor++?></td>
        <td><?= $hasil['nama']?></td>
        <td><img src="<?= $hasil['foto']?>" width="100" height="100"></td>
        <td><?= $hasil['jenis']?></td>
        <td><?= $hasil['harga']?></td>
    </tr>
    <?php }?>
    </table>

</body>
</html>