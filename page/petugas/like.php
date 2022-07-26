<?php
ob_start();
		session_start();
		//KONEKSI
		include('../../config/koneksi.php');		
		$link=koneksi_db();
		
		///VARIABEL
		$id_komentar=$_GET['id_komentar'];
		$id_forum=$_GET['id_forum'];
		$nip = $_SESSION['nip'];
		$status = $_SESSION['status'];

		$cekdata="SELECT t_detail_komentar.`id_komentar`
				FROM t_detail_komentar
				WHERE t_detail_komentar.`id_komentar` = '$id_komentar'
				AND t_detail_komentar.`nip` = '$nip'";
		$ada=mysql_query($cekdata) or die(mysql_error());

		$cekdata2="SELECT t_detail_komentar.`id_komentar`
				FROM t_detail_komentar
				WHERE t_detail_komentar.`id_komentar` = '$id_komentar'
				AND t_detail_komentar.`nip` = '$nip'
				AND t_detail_komentar.`status` ='like'";
		$ada2=mysql_query($cekdata2) or die(mysql_error());
		
		if(mysql_num_rows($ada2)>0){
			$myqryUpdate="UPDATE t_detail_komentar 
			        SET status='',
			        	tanggal_detail=NOW()
					WHERE id_komentar='$id_komentar'
					AND nip='$nip'";
			mysql_query($myqryUpdate) or die(mysql_error());
		}
		else if(mysql_num_rows($ada)>0){
			$myqryUpdate="UPDATE t_detail_komentar 
			        SET status='like',
			        	tanggal_detail=NOW()
					WHERE id_komentar='$id_komentar'
					AND nip='$nip'";
			mysql_query($myqryUpdate) or die(mysql_error());
		}
		else{

			$myqryInsert="INSERT INTO t_detail_komentar VALUES(null,'$id_komentar','$nip','like',NOW())";
			mysql_query($myqryInsert) or die(mysql_error());
		}
		
	
		
		header("location:index.php?page=detail_forum&&id_forum=$id_forum");
ob_end_flush();	
?>
