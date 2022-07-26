<?php
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
		
		//QUERY	
		$query=mysql_query("UPDATE t_kasus SET id_kasus='$id_kasus', nip='$nip', nama_kasus = '$nama_kasus', solusi='$solusi', status_cbr='Retain' WHERE id_kasus = '$id_kasus'");
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

			if (isset($_POST['id_atributgejala_'.$j])) {  
				$id_atributgejala = $_POST['id_atributgejala_'.$j];

				$myqryInsertDetailKasus="INSERT INTO t_detail_kasus
									VALUES(NULL,'$id_kasus','$id_atributgejala','$bobot')";
				mysql_query($myqryInsertDetailKasus) or die(mysql_error());
			} 

			
		}		
		ob_end_flush();
?>
