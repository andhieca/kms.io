<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_atribut_gejala=$_GET['id_atribut_gejala'];
	 	
	
	  $query =  "DELETE FROM t_atributgejala WHERE id_atribut_gejala='$id_atribut_gejala'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=daftar_atribut_gejala'</script>";
	}
	 
	  ob_end_flush();
?>