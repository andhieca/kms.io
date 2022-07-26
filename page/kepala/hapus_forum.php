<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	  $id_forum=$_GET['id_forum'];
	 	
	
	  $query =  "DELETE FROM t_forum WHERE id_forum='$id_forum'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=forum'</script>";
	}
	  ob_end_flush();	
?>