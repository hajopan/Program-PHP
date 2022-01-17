<?php 

//koneksi database
$koneksi=mysqli_connect("localhost","root","","db_karyawan");

//fungsi ambil data

function query($query){
	global $koneksi;
	$ambil=mysqli_query($koneksi,$query);
	$row=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}
	return $rows;
}

//fungsi tambah

function simpan($data){
	global $koneksi;

	$Nip = htmlspecialchars($data["Nip"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$Alamat = htmlspecialchars($data["Alamat"]);

	$query="INSERT INTO tb_karyawan values ('','$Nip','$Nama','$Alamat')";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);

}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_karyawan where id = $id");


	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;
	$id =$data["id"];
	$Nip = htmlspecialchars($data["Nip"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$Alamat = htmlspecialchars($data["Alamat"]);

	$query ="UPDATE tb_karyawan SET 
	Nip='$Nip', Nama='$Nama', Alamat='$Alamat' WHERE id=$id
	";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}


 ?>