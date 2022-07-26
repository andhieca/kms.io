<?php
ob_start();
	session_start();
		//KONEKSI
		include('../../config/koneksi.php');		
		$link=koneksi_db();
		

		///VARIABEL
		$jumlah = $_POST['jumlah'];
		$id_kasus = $_POST['id_kasus'];
		$nama_kasus = $_POST['nama_kasus'];
		$solusi = $_POST['solusi'];
		$bobot = $_POST['bobot'];
		$nip = $_SESSION['nip'];

		$myqryInsertKasus="INSERT INTO t_kasus
							VALUES('$id_kasus','$nip',trim('$nama_kasus'),trim('$solusi'),'Retain')";
		mysql_query($myqryInsertKasus) or die(mysql_error());

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

		header("Location:index.php?page=daftar_kasus_penyakit&&tambah_kasus_sukses=$id_kasus");
		
	
		

ob_end_flush();

?>