<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_komentar=$_GET['id_komentar'];
	  $id_forum=$_GET['id_forum'];
	 	
	
	  $query =  "DELETE FROM t_komentar WHERE id_komentar='$id_komentar'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	   if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=detail_forum&&id_forum=$id_forum'</script>";
	}
	  ob_end_flush();
?>