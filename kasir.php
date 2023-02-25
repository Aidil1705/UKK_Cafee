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
                    <input type="number" name="nomeja" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Pesanan </legend>
                    <input type="text" name="pesanan" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Total Harga</legend>
                    <input type="text" name="harga" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Nama Kasir</legend>
                    <input type="text" name="kasir" >
                </fieldset>
            </p>
</br>
            <p><fieldset><legend>Id Kasir</legend>
                    <input type="number" name="idkasir" >
                </fieldset>
            </p>
</br>
            <p><button type="submit" name="simpan">Lakukan Transaksi</button></p>
            </form>
        </div>
    </div>
    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($conn, "insert into transaksi set
        nomeja = '$_POST[nomeja]',
        pesanan = '$_POST[pesanan]',
        total_harga = '$_POST[harga]',
        nama_kasir = '$_POST[kasir]',
        id_kasir = '$_POST[idkasir]'
        ");
    }


    ?>
</body>
</html>