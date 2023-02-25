<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM transaksi WHERE id='$id'")or die(mysqli_error());
 
header("location:datatransaksiadmin.php?pesan=hapus");
?>