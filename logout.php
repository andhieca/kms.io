<?php
	session_start();
	if (isset($_SESSION['nip']))
	{
		session_destroy();
	}
	header('Location:login.php');
?>