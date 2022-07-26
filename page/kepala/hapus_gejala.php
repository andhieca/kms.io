<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_atributgejala=$_GET['id_atributgejala'];
	 	
	
	  $query =  "DELETE FROM t_atributgejala WHERE id_atributgejala='$id_atributgejala'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=daftar_atribut_gejala'</script>";
	}
	 
	  ob_end_flush();
?>