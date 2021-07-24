<?php
include '../functions.php';

$color = $_POST['color'];

if($stmt = mysqli_prepare($conn, "INSERT INTO currentData (currentData, currentValue) VALUES ('lastUpdate','".time()."'), ('usingAudio','".$color."') ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)")){
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit;
	} else{
		echo mysqli_errno($conn) .": " . mysqli_error($conn);
	}
}
?>