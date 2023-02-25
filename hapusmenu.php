<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM menu WHERE id='$id'")or die(mysqli_error());

header("location:menumanajer.php?pesan=hapus")

?>