<?php
	$host = 'localhost';
	$user = 'root';
	$passw = '';
	$db = 'ahp_dss';

	$con = mysqli_connect($host,$user,$passw);
	mysqli_select_db($con,$db) or die ("Gagal");
?>