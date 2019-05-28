<?php
	require("connect.php");
	// 1 : Tạo ra câu lệnh truy vấn
	$id = $_GET['id'];
	$isMemorized = $_GET['isMemorized'];

	$kiemtra = mysqli_query($con , "SELECT Id FROM tuvung WHERE Id = '$id'");

	$rowketqua = mysqli_fetch_assoc($kiemtra);
	if ($rowketqua['Id'] == '') {
		echo "Null";
	}else{
		$query = "UPDATE Tuvung SET isMemorized = '$isMemorized' WHERE Id = '$id'";

		$data = mysqli_query($con , $query);

		if ($data){
			echo "true";
		}else{
			echo "false";
		}
	}
?>