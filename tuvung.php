<?php
	require("connect.php");
	// 1 : Tạo ra câu lệnh truy vấn
	$query = "SELECT * FROM tuvung";

	$data = mysqli_query($con , $query);

	//2 : Tạo ra đối tượng trả về
	class Tuvung{
		function __construct($id,$en,$vn,$isMemorized){
			$this->Id=$id;
			$this->En=$en;
			$this->Vn=$vn;
			$this->isMemorized=$isMemorized;
		}
	}

	//3 : Tạo ra 1 mảng chứa giá trị và truyền dữ liệu
	$arraytuvung = array();
	while ($rowData = mysqli_fetch_assoc($data)) {
		array_push($arraytuvung,new Tuvung(
							$rowData['Id'],
							$rowData['En'],
							$rowData['Vn'],
							$rowData['isMemorized']));
	}
	// 4 : In ra dạng json
	echo json_encode($arraytuvung);
?>