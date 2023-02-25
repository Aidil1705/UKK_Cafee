<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM pengguna WHERE id='$id'")or die(mysqli_error());
 
header("location:admin.php?pesan=hapus");
?>