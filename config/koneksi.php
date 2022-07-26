<?php
ob_start();
	function koneksi_db()
	{
		$connect = mysql_connect('localhost','root','');
		mysql_select_db('db_keswan');

		if ($connect) 
		{
			return $connect;
		}
		return false;
	}
	ob_end_flush();
?>