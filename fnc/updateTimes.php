<?php
include '../functions.php';

$color = $_POST['color'];
$timeCE = $_POST['timeCE'] ?? " ";
$timeH2 = $_POST['timeH2'] ?? " ";
$timeH3 = $_POST['timeH3'] ?? " ";
$timeODST = $_POST['timeODST'] ?? " ";
$timeReach = $_POST['timeReach'] ?? " ";
$timeH4 = $_POST['timeH4'] ?? " ";
$timeH5 = $_POST['timeH5'] ?? " ";

$finalValue = serialize(array($timeCE, $timeH2, $timeH3, $timeODST, $timeReach, $timeH4, $timeH5));

if($stmt = mysqli_prepare($conn, 
	"INSERT INTO currentData (currentData, currentValue) VALUES ('lastUpdate','".time()."'), ('times".$color."','".$finalValue."') ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)")){
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit;
	} else{
		echo mysqli_errno($conn) .": " . mysqli_error($conn);
	}
}
?>