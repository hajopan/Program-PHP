	<?php 
		include 'funct.php';
		if (isset($_POST["tambah"])) {
			if (simpan($_POST)>0) {
				echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href='prak10.php';
				</script> ";
			}
			else{
				echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href='prak10.php';
				</script> ";
			}
		}


	 ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Tambah data</title>
	</head>
	<body>
		<form action="" method="post">
		<table>
			<tr><th colspan="2" align="center">Tambah Data</th></tr>
			<tr>
				<td>Nip</td>
				<td><input type="text" name="Nip"></td>
			</tr><tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr><tr>
				<td>Alamat</td>
				<td><textarea cols="20" rows="2" name="Alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="tambah" value="tambah"></td>
			</tr>
		</table>
		</form>
	</body>
	</html>