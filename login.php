<?php
    session_start();
    include "koneksi.php";
    
    if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($qry) > 0){

        $pesan = "Melakukan Login";
        $sql = "INSERT INTO log_user(nama, pesan) VALUES ('$username','$pesan')";

        mysqli_query($conn, $sql);
 
        $data = mysqli_fetch_assoc($qry);
        if($data['level']=="Kasir"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Kasir";
            header("location:kasir.php");

        }else if($data['level']=="Manajer"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Manajer";
            header("location:manajer.php");

        }else if($data['level']=="Admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";
            header("location:admin.php");
        
        }else{
            header("location:login.php?pesan=gagal");
        }	
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log in</title>
    <style>
        .tombol{
            float: right;
        }
    </style>
</head>
<body>
    <center>
    <div class="box">
    <h2>Silahkan Login </h2>
        <img src="img/profil.jpg" width="100px" class="profil">
        <table>
            <form action="" method="Post">
            <tr>
                <td><input type="text" name="username" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td class="tombol"><input type="submit" name="masuk" value="masuk"></td>
            </tr>
            </form>
        </table>
      
    </div>
    </center>
</body>
</html>