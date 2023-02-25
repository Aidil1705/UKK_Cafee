<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>menu </td>
            <td>  :  <input type="text" name="menu"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>  :  <input type="radio" name="jenis" value="ringan">Ringan  <input type="radio" name="jenis" value="berat">Berat <input type="radio" name="jenis" value="minuman">Minuman 
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>  :  <input type="text" name="harga"></td>
        </tr>
        <tr>
            <td>foto</td>
            <td>  :  <input type="file" name="foto"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="tambah">Tambah Menu</button></td>
        </tr>
    </table>
    </form>
    <a href="menumanajer.php"><button>Kembali</button></a>
    <?php
    include "koneksi.php";
    if(isset($_POST['tambah'])){
        $path = "./img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

       


        mysqli_query($conn,"INSERT INTO menu set
        nama = '$_POST[menu]',
        jenis = '$_POST[jenis]',
        harga = '$_POST[harga]',
        foto = '$path'
        ");

        echo "<h1>Berhasil menambahkan Jurusan!</h1>";
        header("Location: ./menumanajer.php");
    }
   
    
    ?>
</body>
</html>
bkjdfkjds
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Fasilitas</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Fasilitas </td>
            <td>  :  <input type="text" name="fasilitas"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>  :  <input type="text" name="ket">
            </td>
        </tr>
        <tr>
            <td>foto</td>
            <td>  :  <input type="file" name="foto"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="tambah">Tambah Fasilitas</button></td>
        </tr>
    </table>
    </form>
    <a href="fasilitasad.php"><button>Kembali</button></a>
    <?php
    include "../koneksi.php";
    if(isset($_POST['tambah'])){
        $path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

       


        mysqli_query($conn,"INSERT INTO Fasilitas set
        nama_fasilitas = '$_POST[fasilitas]',
        keterangan = '$_POST[ket]',
        foto = '$path'
        ");

        echo "<h1>Berhasil menambahkan Fasilitas!</h1>";
        header("Location: ./fasilitasad.php");
    }
   
    
    ?>
</body>
</html>