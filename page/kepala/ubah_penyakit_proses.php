<?php
error_reporting(0);
ob_start();
session_start();
		//KONEKSI
		include "../../config/koneksi.php";
		$link=koneksi_db();

		
		///VARIABEL
		$id_kasus 		= $_POST['id_kasus'];
		$nama_kasus 	= $_POST['nama_kasus'];
		$solusi 		= $_POST['solusi'];
		$bobot 			= $_POST['bobot'];
		$nip 			= $_SESSION['nip'];
		$jumlah 		= $_POST['jumlah'];
		
		//QUERY	
		$query=mysql_query("UPDATE t_kasus SET id_kasus='$id_kasus', nip='$nip', nama_kasus = '$nama_kasus', solusi='$solusi' WHERE id_kasus = '$id_kasus' and status_cbr='Retain'");
		if ($query){			
			echo "<script>alert('Data Penyakit Berhasil diubah!'); window.location = 'index.php?page=daftar_kasus_penyakit&&ubah_kasus_sukses=$id_kasus'</script>";
		}
		else{
			echo "<script>alert('Data Penyakit Gagal diubah!'); window.location = 'index.php?page=daftar_kasus_penyakit&&ubah_kasus_sukses=$id_kasus'</script>";
		}

 		$j=0;
		for($i=0; $i < $jumlah; $i++){
			$j++;

			//$terpilih = count($_POST['id_bobot_kriteria_seleksi']);

			if (isset($_POST['id_atribut_gejala_'.$j])) {  
				$id_atribut_gejala = $_POST['id_atribut_gejala_'.$j];

				$myqryInsertDetailKasus="INSERT INTO t_detail_kasus
									VALUES(NULL,'$id_kasus','$id_atribut_gejala','$bobot')";
				mysql_query($myqryInsertDetailKasus) or die(mysql_error());
			} 

			
		}		
		ob_end_flush();
?>
