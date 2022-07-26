<?php
ob_start();
		//KONEKSI
		include "../../config/koneksi.php";
		$link=koneksi_db();

		
		///VARIABEL

		$nip 		 	= $_POST['nip'];
		//$password    	= $_POST['password'];
		$nama_pengguna 	= $_POST['nama_pengguna'];
		$email 	     	= $_POST['email'];
		$alamat			= $_POST['alamat'];
		$tanggal_lahir 	= $_POST['tanggal_lahir'];
		$tanggal_fix	= date("Y-m-d", strtotime("$tanggal_lahir") );
		$link=koneksi_db();
		//QUERY	
		if (empty($_POST['password'])) {
		$query = mysql_query("UPDATE t_pengguna SET nip='$nip', nama_pengguna='$nama_pengguna', alamat='$alamat',email='$email', tanggal_lahir='$tanggal_fix'
 		WHERE nip='$nip'");
		}
		else {
		$password    	= $_POST['password'];
		$query = mysql_query("UPDATE t_pengguna SET nip='$nip', password='$password', nama_pengguna='$nama_pengguna', alamat='$alamat', email='$email', tanggal_lahir='$tanggal_fix'
 		WHERE nip='$nip'");
		}
		if ($query){			
			echo "<script>alert('Data Berhasil diubah!'); window.location = 'index.php?page=profile'</script>";
		}
		else{
			echo "<script>alert('Data Gagal diubah!'); window.location = 'index.php?page=profile'</script>";
		}
		ob_end_flush();
?>
