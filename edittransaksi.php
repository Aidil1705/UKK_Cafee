<?php
    include "koneksi.php";

    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nomeja = $_POST['nomeja'];
        $pesanan = $_POST['pesanan'];
        $total_harga = $_POST['harga'];
        $nama_kasir = $_POST['kasir'];
        $id_kasir = $_POST['idkasir'];
        mysqli_query($conn, "UPDATE transaksi SET nomeja = '$nomeja',  pesanan = '$pesanan', total_harga = '$total_harga', nama_kasir = '$nama_kasir', id_kasir = '$id_ksair' WHERE id= '$id'");
        header('location: datatransaksiadmin.php');
    }


    $id = $_GET["id"];

    $qry = mysqli_query($conn, "SELECT * FROM transaksi WHERE id= '$id'");
    $nomor = 1;

    while($data = mysqli_fetch_assoc($qry)){



?>
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
    </br>
    <div class="isi">
    <h1>Transaksi Pembayaran</h1>
        <div class="border">
            <form action="" method="POST">
            <p><fieldset><legend>No Meja </legend>
                    <input type="hidden" name="id" value="<?= $data['id']?>">
                    <input type="number" name="nomeja" value="<?= $data['nomeja']?>" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Pesanan </legend>
                    <input type="text" name="pesanan" value="<?= $data['pesanan']?>" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Total Harga</legend>
                    <input type="text" name="harga"  value="<?= $data['total_harga']?>">
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Nama Kasir</legend>
                    <input type="text" name="kasir" value="<?= $data['nama_kasir']?>" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Id Kasir</legend>
                    <input type="number" name="idkasir" value="<?= $data['id_kasir']?>">
                </fieldset>
            </p>
</br>
            <p><button type="submit" name="simpan">Edit Transaksi</button></p>
            </form>
        </div>
    </div>
    <?php } ?>
    
</body>
</html>