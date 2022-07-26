<?php
ob_start();
include "../../config/koneksi.php";

$nip   		= $_POST['nip'];
$foto		= isset($_POST['foto']);
 

$link=koneksi_db();
if (!empty($_FILES["foto"]["tmp_name"]))
		{
			$namafolder="../../data/gambar/"; 
			$jenis_gambar=$_FILES['foto']['type'];
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/JPG" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			{          
				$foto = $namafolder . basename($_FILES['foto']['name']);      
				if (!move_uploaded_file($_FILES['foto']['tmp_name'], $foto))
				{
				   die("Gambar gagal dikirim");
				}
				//Hapus foto yang lama jika ada
				$res = mysql_query("SELECT foto from t_pengguna WHERE nip='$nip' LIMIT 1");
				$d=mysql_fetch_object($res);
				if (strlen($d->foto)>3)
				{
					if (file_exists($d->foto)) unlink($d->foto);
				}                   
				//update foto dengan yang baru
				$query = mysql_query("UPDATE t_pengguna SET foto='$foto' WHERE nip='$nip' LIMIT 1");
			}
			else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
		} //end if cek file upload
if ($query){
	echo "<script>alert('foto Berhasil diubah!'); window.location = 'index.php?page=profile'</script>";
}
ob_end_flush();
?>