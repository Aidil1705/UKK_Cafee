<?php 
	include "koneksi.php";

	if (isset($_POST['Simpan'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		mysqli_query($conn, "UPDATE pengguna SET username = '$username', password = '$pass' WHERE id = '$id'");
		header('Location: admin.php');
	}



	$id = $_GET["id"];
        
	$qry = mysqli_query($conn, "SELECT * FROM pengguna WHERE id = '$id'");
	$nomor = 1;
    
	$data = mysqli_fetch_assoc($qry);
	?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Edit Pengguna</h3>
 
	
	<form action="edituser.php" method="post" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="username" value="<?php echo $data['username'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="pass" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><button type="submit" name="Simpan">Edit Jurusan</button></td>					
			</tr>				
		</table>
	</form>
</body>
</html>