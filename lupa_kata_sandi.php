<?php 
error_reporting(0);
include "config/koneksi.php";
$link = koneksi_db();

if(isset($_POST['submit'])) {	
	$email = $_POST['email'];
	$query = "SELECT * FROM t_pengguna where email='$email'";
	$sql = mysql_query($query,$link);

	while($row = mysql_fetch_array($sql)){
		$nip = $row['nip'];
		$nama_pengguna = $row['nama_pengguna'];
		$pass = $row['password'];
		$email1 = $row['email'];
	}
	
	if ($email=$email1)
	{
		$to = $email;
		$subject = "Informasi Akun";
		$body = "Informasi Password pengguna <br> nip : $nip <br> password : $pass <br> nama_pengguna : $nama_pengguna";
		$from = "FROM : kmskeswan-kudsm.com";
		$kirim = mail($to, $subject, $body, $from);
		if($kirim){
             header('location:lupa_kata_sandi.php?status="Silahkan cek ke email anda!".');
        }
        else
        {
             header('location:lupa_kata_sandi.php?status="Gagal Mengirim Email"');
        }
    }
    else
    {
        header('location:lupa_kata_sandi.php?status="Email anda belum terdaftar".');
    }

}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KUD SARWA MUKTI - KESEHATAN HEWAN</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
       

    </head>

    <body>
        
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Knowledge Management System</strong></h1>
                            <h1>KUD Sarwa Mukti - Kesehatan Hewan</h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET['status'])){
                        ?>
                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h3><p> <?php echo $_GET['status'];?> </p></h3>
                                </div>
                                <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Lupa Kata Sandi</h3>
                            		<p>Masukan Alamat Email untuk memulihkan akun anda!</p>
                        		</div>
                               
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="email">Email</label>
			                        	<input type="text" name="email" placeholder="Masukan Alamat email..." class="form-email form-control" id="email" required oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
			                        </div>
                                   
			                        <button type="submit" class="btn" name="submit">Kirim!</button>
                                     <a href="index.php">Login Sekarang</a>
                                
                               
                                   
                               

                                        
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <!---
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                    ---->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <script>
 function check(input) {
   if (input.value == "") {
     input.setCustomValidity('Field ini tidak boleh kosong');
   } else  {
     input.setCustomValidity('');
   }
 }
</script>
 <!-- PNotify -->
    
    </body>

</html>