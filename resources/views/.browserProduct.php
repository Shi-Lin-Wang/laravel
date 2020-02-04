<?php

	header('Content-Type: application/json;charset=utf-8');

	$return_arr = array();
	$id = $_POST['id'];

	$sql = "SELECT `productName` ,`productPrice`,`productImage`, `productID` FROM `product` WHERE `supplierID`=".$id;
    $result = $conn->query($sql);

	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$row_array = $row;
		array_push($return_arr,$row_array);
    }
	//回傳json形式
	echo json_encode($return_arr);
	mysqli_free_result($result);

	mysqli_close($conn);

?>
