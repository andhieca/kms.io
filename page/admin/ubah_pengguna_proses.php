<?php
ob_start();
		//KONEKSI
		include "../../config/koneksi.php";
		$link=koneksi_db();

		
		///VARIABEL
		$nip 		 	= $_POST['nip'];
		$password    	= $_POST['password'];
		$nama_pengguna 	= $_POST['nama_pengguna'];
		$level 	     	= $_POST['level'];
		$email 	     	= $_POST['email'];
		$jabatan 	 	= $_POST['jabatan'];
		$status		 	= $_POST['status'];
		$link=koneksi_db();
		//QUERY	
		$query = mysql_query("UPDATE t_pengguna SET nip='$nip', password='$password', nama_pengguna='$nama_pengguna', level='$level', email='$email', jabatan='$jabatan', status='$status'
 		WHERE nip='$nip'");
		
		if ($query){			
			echo "<script>alert('Data pengguna Berhasil diubah!'); window.location = 'index.php?page=data_pengguna'</script>";
		}
		else{
			echo "<script>alert('Data pengguna Gagal diubah!'); window.location = 'index.php?page=data_pengguna'</script>";
		}
		ob_end_flush();
?>
