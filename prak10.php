<?php 
	//koneksi ke function
include 'funct.php';
$ambil=query("SELECT*FROM tb_karyawan");


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>form tampil</title>
</head>
<body>
	<br><a href="tambah.php">Tambah Data</a>
	<table border="1">
		<tr>
			<td>Nomor</td>
			<td>Nip</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Aksi</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($ambil as $row):?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row["Nip"]; ?></td>
			<td><?php echo $row["Nama"]; ?></td>
			<td><?php echo $row["Alamat"]; ?></td>
			<td>
				<a href="hapus.php?id=<?php echo $row["id"]?>".onclink="return confirm('anda yakin ingin menghapus data ini?');">Hapus</a>
				<a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>

</body>
</html>