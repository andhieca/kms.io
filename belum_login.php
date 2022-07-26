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
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Masuk</h3>
                            		<p>Masukan NIP dan Password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="login_proses.php" method="POST" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Nip</label>
			                        	<input type="text" name="nip" placeholder="Nip..." class="form-username form-control" id="username" required oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" required oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" >
			                        </div>
                                    <h4><p><strong>Silahkan login terlebih dahulu!</strong></p></h4>
			                        <button type="submit" class="btn">Masuk!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
             
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        

        <script>
 function check(input) {
   if (input.value == "") {
     input.setCustomValidity('Field ini tidak boleh kosong');
   } else  {
     input.setCustomValidity('');
   }
 }
</script>
    </body>

</html>