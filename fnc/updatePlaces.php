<?php
include '../functions.php';

$teamPlace1 = $_POST['teamPlace1'];
$teamPlace2 = $_POST['teamPlace2'];
$teamPlace3 = $_POST['teamPlace3'];
$teamPlace4 = $_POST['teamPlace4'];

if($stmt = mysqli_prepare($conn, 
	"INSERT INTO currentData (currentData, currentValue) VALUES ('lastUpdate','".time()."'), ('teamPlace1',?), ('teamPlace2',?), ('teamPlace3',?), ('teamPlace4',?) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)")){
	mysqli_stmt_bind_param($stmt, "ssss", 
		$teamPlace1,
		$teamPlace2,
		$teamPlace3,
		$teamPlace4
	);
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit;
	} else{
		echo mysqli_errno($conn) .": " . mysqli_error($conn);
	}
}
?>