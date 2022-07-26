<?php
	ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
        <center><div>
        	<h1><li class="fa fa-user"></li><h1>
            <h1>Selamat datang di halaman <?php echo $_SESSION['level'];?> !</h1>                        
        </div></center>
<?php
    }
    else{
    header("Location:../../belum_login.php");
}
ob_end_flush();
?>