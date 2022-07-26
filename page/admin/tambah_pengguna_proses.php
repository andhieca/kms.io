<?php
ob_start();
include "../../config/koneksi.php";

$nip   		= $_POST['nip'];
$password   = $_POST['password'];
$nama 		= $_POST['nama_pengguna'];
$level 	    = $_POST['level'];
$email 	    = $_POST['email'];
$jabatan 	= $_POST['jabatan'];
$tanggal_lahir 	= $_POST['tanggal_lahir'];
$tanggal_fix	= date("Y-m-d", strtotime("$tanggal_lahir") );

$link=koneksi_db();
$query = mysql_query("INSERT INTO  t_pengguna (nip, password, nama_pengguna, level, email, jabatan, tanggal_lahir) VALUES ('$nip', '$password', '$nama', '$level', '$email','$jabatan','$tanggal_fix')",$link);
if ($query){
	echo "<script>alert('Data pengguna Berhasil disimpan!'); window.location = 'index.php?page=data_pengguna'</script>";	
} else {
	echo "<script>alert('Data pengguna Gagal dimasukan!'); window.location = 'index.php?page=tambah_pengguna.php'</script>";	
}
ob_end_flush();
?>