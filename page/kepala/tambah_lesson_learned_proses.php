<?php
ob_start();
include "../../config/koneksi.php";
$nip					= $_POST['nip'];
$kode_pejantan 			= $_POST['kode_pejantan'];
$keterangan				= $_POST['keterangan'];
$nama_pejantan			= $_POST['nama_pejantan'];
$penanganan_pkb			= $_POST['penanganan_pkb'];
$penanganan_lainnya		= $_POST['penanganan_lainnya'];
$proses_ib				= $_POST['proses_ib'];
$dosis					= $_POST['dosis'];
$no_anggota				= $_POST['no_anggota'];
$nama_anggota			= $_POST['nama_anggota'];
$nomor_telinga			= $_POST['nomor_telinga'];
$alamat_anggota			= $_POST['alamat_anggota'];
$nama_pejantan			= $_POST['nama_pejantan'];
$tanggal_penanganan 	= $_POST['tanggal_penanganan'];
$tanggal_penanganan_fix	= date("Y-m-d", strtotime("$tanggal_penanganan"));
$nama_sapi				= $_POST['nama_sapi'];
$jenis_penanganan		= $_POST['jenis_penanganan'];
$id_kategori			= $_POST['id_kategori'];


$link=koneksi_db();

$query1 = mysql_query("INSERT INTO  t_lesson_learned  (id_lesson_learned, nip, keterangan, tanggal_posting,kode_pejantan,nama_pejantan, penanganan_pkb, penanganan_lainnya, proses_ib, dosis)
	VALUES (NULL,'$nip','$keterangan', NOW(), '$kode_pejantan','$nama_pejantan','$penanganan_pkb','$penanganan_lainnya','$proses_ib','$dosis')");
//mecari last id terbesar
$sql = "select max(id_lesson_learned) as last_id from t_lesson_learned limit 1";
$hasil = mysql_query($sql);
$row = mysql_fetch_array($hasil);
$last_id = $row['last_id'];
//menyimpan ke tabel histori penanganana
$query2 = mysql_query("INSERT INTO  t_histori_penanganan  (id_lesson_learned, id_kategori, no_anggota, nama_anggota,alamat_anggota,tanggal_penanganan, nomor_telinga, nama_sapi, jenis_penanganan)
	VALUES ('$last_id', $id_kategori,'$no_anggota', '$nama_anggota', '$alamat_anggota','$tanggal_penanganan_fix','$nomor_telinga','$nama_sapi','$jenis_penanganan')");
if ($query2){
	echo "<script>alert('Lesson Learned Berhasil ditambahkan!'); window.location = 'index.php?page=lesson_learned'</script>";	
} else {
	echo "<script>alert('Lesson Learned gagal ditambahkan!'); window.location = 'index.php?page=lesson_learned'</script>";	
}
ob_end_flush();
?>