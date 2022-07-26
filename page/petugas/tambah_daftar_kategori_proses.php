<?php
ob_start();
include "../../config/koneksi.php";
$nama 		= $_POST['nama_kategori'];


$link=koneksi_db();
$query = mysql_query("INSERT INTO  t_kategori (nama_kategori) VALUES ('$nama')",$link);
if ($query){
	echo "<script>alert('Data kategori Berhasil dimasukan!'); window.location = 'index.php?page=daftar_kategori'</script>";	
} else {
	echo "<script>alert('Data kategori Gagal dimasukan!'); window.location = 'index.php?page=tambah_kategori'</script>";	
}
ob_end_flush();
?>