<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jurusan.css">
</head>
<body>
    <?php
    include('sidebarad.php');
    ?>
</br>
    <center>
    <table border="1" class="table">
        <tr>
            
            <th>No</th>
            <th>Nama</th>
            <th>Pesan</th>
            <th>Waktu</th>
            </div>
        </tr>
        <?php
include 'koneksi.php';
$select = mysqli_query($conn, "SELECT * FROM log_user ORDER BY waktu");
$nomor = 1 ;
while($hasil = mysqli_fetch_array($select)){

?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['pesan'] ?></td>
        <td><?php echo $hasil['waktu'] ?></td>

    </tr>
<?php }?>
    </table>
</center>

</body>
</html>