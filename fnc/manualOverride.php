<?php
include '../functions.php';

$val = $_POST['val'];

$stmt = mysqli_prepare($conn, "UPDATE currentData SET currentValue = '$val' WHERE currentData = 'manualOverride'");
if(mysqli_stmt_execute($stmt)){
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	exit;
} else{
	echo mysqli_errno($conn) .": " . mysqli_error($conn);
}
?>