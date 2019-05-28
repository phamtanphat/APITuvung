<?php
	require("connect.php");
	// 1 : Tạo ra câu lệnh truy vấn
	$id = $_GET['id'];

	$kiemtra = mysqli_query($con , "SELECT Id FROM tuvung WHERE Id = '$id'");

	$rowketqua = mysqli_fetch_assoc($kiemtra);
	if ($rowketqua['Id'] == '') {
		echo "Null";
	}else{
		$query = "DELETE FROM Tuvung WHERE Id = '$id'";

		$data = mysqli_query($con , $query);

		if ($data){
			echo "true";
		}else{
			echo "false";
		}
	}
?>