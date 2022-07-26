<?php

include "../../config/koneksi.php";
$judul_lesson 		= $_POST['judul'];
$isi_lesson			= $_POST['isi'];
$nip				= $_POST['nip'];

$link=koneksi_db();
$query = mysql_query("INSERT INTO  t_lesson_learned VALUES  (NULL, '$nip', '$judul_lesson', '$isi_lesson', NOW())");
if ($query){
	echo "<script>alert('Lesson Learned Berhasil ditambahkan!'); window.location = 'index.php?page=lesson_learned'</script>";	
} else {
	echo "<script>alert('Lesson Learned gagal ditambahkan!'); window.location = 'index.php?page=lesson_learned'</script>";	
}

?>