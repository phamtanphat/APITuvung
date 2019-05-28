<?php
	require("connect.php");
	// 1 : Tạo ra câu lệnh truy vấn
	$en = $_POST['en'];
	$vn = $_POST['vn'];

	$query = "INSERT INTO tuvung VALUES(null,'$en','$vn','false')";

	$data = mysqli_query($con , $query);

	if ($data){
		echo "true";
	}else{
		echo "false";
	}
?>