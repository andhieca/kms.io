<?php
ob_start();
		//KONEKSI
		include "../../config/koneksi.php";
		$link=koneksi_db();

		
		///VARIABEL
		$id_atribut_gejala = $_POST['id_atribut_gejala'];
		$nama_atribut_gejala = $_POST['nama_atributgejala'];
		
		//QUERY	
		$query = mysql_query("UPDATE t_atributgejala SET id_atribut_gejala='$id_atribut_gejala', nama_atributgejala='$nama_atribut_gejala',bobot_atribut='$bobot'
 		WHERE id_atribut_gejala='$id_atribut_gejala'");
		
		if ($query){			
			echo "<script>alert('Daftar atribut gejala Berhasil diubah!'); window.location = 'index.php?page=daftar_atribut_gejala'</script>";
		}
		else{
			echo "<script>alert('Daftar atribut gejala Gagal diubah!'); window.location = 'index.php?page=daftar_atribut_gejala'</script>";
		}
		ob_end_flush();
?>
