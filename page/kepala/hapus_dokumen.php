<?php
ob_start();
	include '../../config/koneksi.php';
	$link=koneksi_db();

	 $id_dokumen=$_GET['id_dokumen'];
	 	
	  $res = mysql_query("SELECT dokumen_pengetahuan FROM t_dokumen WHERE id_dokumen='$id_dokumen'");
	  $d=mysql_fetch_object($res);
	  if (strlen($d->dokumen_pengetahuan)>3)
	  {
		if (file_exists($d->dokumen_pengetahuan)) unlink($d->dokumen_pengetahuan);
	  }
	  
	  $query =  "DELETE FROM t_dokumen WHERE id_dokumen='$id_dokumen'";
	  $hapus2 = mysql_query($query) or die ("PENGHAPUSAN GAGAL");
	  
	  if($query){
	  	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=daftar_dokumen'</script>";
	  }
	  ob_end_flush();
?>