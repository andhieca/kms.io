<?php
if ((isset($_POST['nip'])) and (isset($_POST['password']))!=="")   
{
	session_start();
	require_once "config/koneksi.php";
	$nip = $_POST['nip'];
	$password = $_POST['password'];
	//query untuk mendapatkan record dari nip
	$link= koneksi_db();
	$hasil = mysql_query("SELECT * FROM t_pengguna WHERE nip = '$nip' and password='$password' and status='Aktif'",$link);
	$data = mysql_fetch_array($hasil);
	//cek kesesuaian password
	if ($password == $data['password'])
	{
		
	    // menyimpan nip, level, ke dalam session
	    $_SESSION['level']= $data['level'];
	    $_SESSION['nip']=$data['nip'];  
	    if($_SESSION['level']=="admin"){
	    	$_SESSION['nip']=$data['nip']; //isi variabel nip
			$_SESSION['nama_pengguna']=$data['nama_pengguna'];//isi variabel nama		
			//$_SESSION['nip']=$data['nip'];//isi variabel nama		
			$_SESSION['jabatan']=$data['jabatan'];//isi variabel jenis ptk					
			//$_SESSION['sudahlogin']=true;//variabel status sudah login
			header("Location:index.php");
	    }
	    else if($_SESSION['level']=="kepala"){
	    	$_SESSION['nip']=$data['nip']; //isi variabel nip
			$_SESSION['nama_pengguna']=$data['nama_pengguna'];//isi variabel nama		
			//$_SESSION['nip']=$data['nip'];//isi variabel nama		
			$_SESSION['jabatan']=$data['jabatan'];				
		
			header("Location:index.php");
	    }
	    else if($_SESSION['level']=="petugas"){
	    	$_SESSION['nip']=$data['nip']; //isi variabel nip
			$_SESSION['nama_pengguna']=$data['nama_pengguna'];//isi variabel nama		
			//$_SESSION['nip']=$data['nip'];//isi variabel nama		
			$_SESSION['jabatan']=$data['jabatan'];
			header("Location:index.php");
	    }
	    
	    
	}
	else{
		header("Location:gagal_login.php");
	}
}
else
{
	header("Location:belum_login.php");
}
?>