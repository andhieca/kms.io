<?php
ob_start();
	function navigasi(){
		if (isset($_GET['page'])) {
			switch ($_GET['page']) {
				case 'data_pengguna' : include('data_pengguna.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_pengguna' : include('tambah_pengguna.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_pengguna' : include('ubah_pengguna.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'daftar_kategori' : include('daftar_kategori.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_kategori' : include('tambah_daftar_kategori.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_kategori' : include('ubah_daftar_kategori.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'daftar_dokumen' : include('daftar_dokumen.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'unggah_dokumen' : include('unggah_dokumen.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'forum' : include('forum.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_forum_diskusi' : include('tambah_forum.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'detail_forum' : include('detail_forum.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'profile' : include('profile.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'daftar_atribut_gejala' : include('daftar_atribut_gejala.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'daftar_kasus_penyakit' : include('daftar_kasus_penyakit.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_daftar_atribut_gejala' : include('tambah_daftar_atribut_gejala.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_daftar_atribut_gejala' : include('ubah_daftar_atribut_gejala.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_daftar_kasus_penyakit' : include('tambah_daftar_kasus_penyakit.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'lesson_learned' : include('lesson_learned.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'tambah_lesson_learned' : include('tambah_lesson_learned.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'detail_lesson_learned' : include('detail_lesson_learned.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_biodata_pengguna' : include('ubah_biodata_pengguna.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'analisa_kasus' : include('analisa_kasus.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'daftar_revisi_penyakit' : include('daftar_revisi_penyakit.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'detail_kasus_penyakit' : include('detail_kasus_penyakit.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_kasus_penyakit' : include('ubah_kasus_penyakit.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'analisa_kasus_proses' : include('analisa_kasus_proses.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'hasil_analisis_kasus' : include('hasil_analisis_kasus.php');
					break;
				
			}
			switch ($_GET['page']) {
				case 'ubah_kasus_penyakit_revisi' : include('ubah_kasus_penyakit_revisi.php');
					break;
				
			}




		}
		else{
			include "beranda.php";
		}
		
	}
	ob_end_flush();
?>