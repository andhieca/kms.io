<?php
	include '../../config/koneksi.php';
	$link=koneksi_db();

	$nama_dokumen	= $_POST['nama_dokumen'];
	$id_kategori	= $_POST['id_kategori'];
	$nip			= $_POST['nip'];
	$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
	$file_name		= $_FILES['dokumen_pengetahuan']['name'];
	$file_ext		= strtolower(end(explode('.', $file_name)));
	$file_size		= $_FILES['dokumen_pengetahuan']['size'];
	$file_tmp		= $_FILES['dokumen_pengetahuan']['tmp_name'];
	
	if(in_array($file_ext, $allowed_ext) === true){

						$namafolder="../../data/dokumen/";
						$lokasi = $namafolder.$nama_dokumen.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$myqry = "INSERT into t_dokumen values(null,'$id_kategori','$nip','$nama_dokumen','$lokasi',NOW())";
						$query=mysql_query($myqry,$link);
						if($query){
							echo "<script>alert('file Berhasil dimasukan!'); window.location = 'index.php?page=daftar_dokumen'</script>";	
						}else{
							echo "<script>alert('file Gagal dimasukan!'); window.location = 'index.php?page=unggah_dokumen'</script>";	
						}
				}
				else{
					echo "<script>alert('Ekstensi file tidak di izinkan!'); window.location = 'index.php?page=unggah_dokumen'</script>";
					
				}
			
?>