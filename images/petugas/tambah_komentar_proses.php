<?php

include "../../config/koneksi.php";
///VARIABEL
        $nip = $_POST['nip'];
        $id_forum=$_POST['id_forum'];
        $isi_komentar = $_POST['isi_komentar'];


$link=koneksi_db();
$query = mysql_query("INSERT INTO  t_komentar  VALUES (null,'$id_forum','$nip','$isi_komentar',NOW())");
if ($query){
    echo "<script>alert('Tambahkan komentar?'); window.location = 'index.php?page=detail_forum&&id_forum=$id_forum'</script>"; 
} else {
    echo "<script>alert('komentar gagal ditambahkan'); window.location = 'index.php?page=detail_forum'</script>";   
}

?>