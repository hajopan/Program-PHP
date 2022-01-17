<?php 
	//ini memanggil file function untuk koneksi
include 'funct.php';

$id=$_GET["id"];

$data= query("SELECT * FROM tb_karyawan WHERE id = $id")[0];



//membuat kondisi ketika tombol button simpan di tekan
if (isset($_POST["edit"])) {

	if (ubah($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di edit');
			document.location.href = 'prak10.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di edit');
			document.location.href = 'prak10.php';
		</script>

		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
<input type="hidden" name="id" value="<?php echo $data["id"] ?>">
</tr>
<tr>
	<td colspan="2"><h3>Silahkan Rubah Data </h3></td>
</tr>
<tr>
	<td>Nip</td>
	<td><input type="text" name="Nip" required="" value="<?php echo $data["Nip"] ?>"></td>
</tr>
<tr>
	<td>Nama</td>
	<td><input type="text" name="Nama" required="" value="<?php echo $data["Nama"] ?>"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type="text" name="Alamat" required="" value="<?php echo $data["Alamat"] ?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="edit" value="edit"></td>
</tr>


		</table>
	</form>
</body>
</html>