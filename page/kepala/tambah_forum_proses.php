<?php
ob_start();

include "../../config/koneksi.php";
///VARIABEL
		$nip = $_POST['nip'];
		$id_forum=$_POST['id_forum'];
		$judul_forum = $_POST['judul_forum'];
		$isi_forum = $_POST['isi_forum'];
		$id_kategori = $_POST['id_kategori'];


$link=koneksi_db();
$query = mysql_query("INSERT INTO  t_forum  VALUES ('$id_forum','$id_kategori','$nip','$judul_forum','$isi_forum',NOW())");
if ($query){
	echo "<script>alert('Tambahkan Topik Ke Forum?'); window.location = 'index.php?page=forum'</script>";	
} else {
	echo "<script>alert('Topik gagal ditambahkan'); window.location = 'index.php?page=tambah_forum'</script>";	
}
ob_end_flush();
?>