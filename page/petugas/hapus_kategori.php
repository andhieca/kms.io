<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_kategori=$_GET['id_kategori'];
	 	
	
	  $query =  "DELETE FROM t_kategori WHERE id_kategori='$id_kategori'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=daftar_kategori'</script>";
	}
	 
	  ob_end_flush();
?>