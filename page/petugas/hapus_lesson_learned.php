<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_lesson_learned=$_GET['id_lesson_learned'];
	 	
	
	  $query =  "DELETE FROM t_lesson_learned WHERE id_lesson_learned='$id_lesson_learned'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=lesson_learned'</script>";
	}
	  ob_end_flush();
?>