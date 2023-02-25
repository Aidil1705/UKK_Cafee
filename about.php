<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Tentang My Cafe</title>
</head>
<body class="bg">
    <?php
    include 'header.php'
    ?>
    </br>
</br>

        <center>
            <div class="judul">
                <h2>My Cafee</h2>
            </div>
        <div class="isi">
        <?php
            include "koneksi.php";
            $qry = mysqli_query($conn, "SELECT * FROM informasi WHERE id=1");
            $hasil = mysqli_fetch_array($qry)
                ?>
            <p><?php echo $hasil['isi']?></p>
            <?php ?>
        </div>
        
        </div>
</br></br>
<div class="isi">
            <h2>Alamat My Cafee</h2>
        </div>
        <div class="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.34649696517!2d105.24359611412947!3d-5.3640003551744115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c535b64632bb%3A0x7774722ca7fc4461!2sSMK%20Negeri%202%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1664333840636!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</center>
    
</body>
</html>