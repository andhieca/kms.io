<?php
		//KONEKSI
		include "../../config/koneksi.php";
		$link=koneksi_db();

		
		///VARIABEL
		$id_kategori = $_POST['id_kategori'];
		$nama 		 = $_POST['nama_kategori'];
		
		//QUERY	
		$query = mysql_query("UPDATE t_kategori SET id_kategori='$id_kategori', nama_kategori='$nama'
 		WHERE id_kategori='$id_kategori'");
		
		if ($query){			
			echo "<script>alert('Daftar kategori Berhasil diubah!'); window.location = 'index.php?page=daftar_kategori'</script>";
		}
		else{
			echo "<script>alert('Daftar kategori Gagal diubah!'); window.location = 'index.php?page=daftar_kategori'</script>";
		}
?>
