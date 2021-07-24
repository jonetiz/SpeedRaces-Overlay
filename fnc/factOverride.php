<?php
include '../functions.php';

$fact = mysqli_real_escape_string($conn, $_POST['fact'] ?? "");
$cat = mysqli_real_escape_string($conn, $_POST['cat'] ?? "");

if($stmt = mysqli_prepare($conn, "INSERT INTO currentData (currentData, currentValue) VALUES ('factOverride','$fact'), ('catOverride','$cat') ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)")){
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit;
	} else{
		echo mysqli_errno($conn) .": " . mysqli_error($conn);
	}
}
?>