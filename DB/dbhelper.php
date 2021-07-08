<?php
require_once ('config.php');

function execute($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//insert, update, delete
	mysqli_query($con, $sql);

	//close connection
	mysqli_close($con);
}

// hàm trả về một mảng các danh mục sản phẩm.
function executeResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$data   = [];

	if ($result != null) {
		while ($row = mysqli_fetch_array($result, 1)) {
			$data[] = $row;
		}
	}

	//close connection
	mysqli_close($con);

	return $data;
}


// hàm lấy ra một sản phẩm có trong danh mục
function executeSingleResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$row    = null;
	if ($result != null) {
		$row = mysqli_fetch_array($result, 1);
	}
	//close connection
	mysqli_close($con);

	return $row;
}