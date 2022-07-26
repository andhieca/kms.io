<?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
    $nip = $_SESSION['nip'];
    $Nama  = $_SESSION['nama_pengguna']; 
?> 
        <center><div>
        	<h1><li class="fa fa-user"></li><h1>
            <h1>Selamat datang di halaman <?php echo $_SESSION['username'];?> !</h1> 
            <h1><?php echo $_SESSION['nama_pengguna'];?></h1>                      
        </div></center>
<?php
    }
    else{
    header("Location:../../belum_login.php");
}
?>