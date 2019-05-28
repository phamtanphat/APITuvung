<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "quanlytuvung";

	$con = mysqli_connect($hostname,$username,$password,$database);
	mysqli_query($con,"SET NAMES 'utf8'");

?>