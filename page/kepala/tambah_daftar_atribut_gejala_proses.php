<?php
ob_start();

		include('../../config/koneksi.php');		
		$link=koneksi_db();
		
		///VARIABEL	
		$id_atributgejala=$_POST['id_atributgejala'];	
		$nama_atributgejala=$_POST['nama_atributgejala'];
		//$bobot=$_POST['bobot'];
	
		
		///VALIDASI PENYIMPANAN
		$cekdata="SELECT nama_atributgejala
					FROM t_atributgejala
					WHERE nama_atributgejala = '$nama_atributgejala'";
	    $ada=mysql_query($cekdata)  or die(mysql_error());
		
		if(mysql_num_rows($ada)>0)
		{ 
			
			header("location:index.php?page=tambah_daftar_atribut_gejala&&nama_atribut=$nama_atributgejala");
		}
		
		else{  	
		
			$myqry="INSERT INTO t_atributgejala VALUES('$id_atributgejala','$nama_atributgejala')";
			mysql_query($myqry) or die(mysql_error());
			
			header("location:index.php?page=daftar_atribut_gejala");
		}
		
		

ob_end_flush();
?>