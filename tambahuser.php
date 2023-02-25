<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
</head>
<body>
<center>
<h1>Tambah User</h1>
</center>

<form action="" method="POST">
    <Table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="user" placeholder="Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
            <input type="radio" name="level" value="kasir">Kasir
            <input type="radio" name="level" value="manajer">Manajer
            <input type="radio" name="level" value="admin">admin
            </td>
        </tr>
        <tr>
            <td><button type="submit" name="simpan">Simpan</button></td>
        </tr>
        </form>
    </Table>
    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
    mysqli_query($conn, "insert into pengguna set
    nama = '$_POST[nama]',
    username = '$_POST[user]',
    password = '$_POST[password]',
    level = '$_POST[level]'
    ");
    echo "<h1>berhasil menambah user";
    header("location: admin.php");
    }


    ?>
</body>
</html>