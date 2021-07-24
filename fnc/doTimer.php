<?php
include '../functions.php';

$fnc = $_POST['fnc'];

if($fnc == "start") {
	$sql = "INSERT INTO currentData (currentData, currentValue) VALUES ('timerStarted',".time()."),('timerStatus',1) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)";
} elseif ($fnc == "resume") {
	$sql = "INSERT INTO currentData (currentData, currentValue) VALUES ('timerStarted'," . (time() - (floatval(qcd('timerStopped')) - floatval(qcd('timerStarted'))) + 1) ."),('timerStatus',1) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)";
} elseif ($fnc == "stop") {
	$sql = "INSERT INTO currentData (currentData, currentValue) VALUES ('timerStopped',".time()."),('timerStatus',2) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)";
} elseif ($fnc == "reset") {
	$sql = "INSERT INTO currentData (currentData, currentValue) VALUES ('timerStarted',".time()."),('timerStopped',".time()."),('timerStatus',0) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)";
}

if($stmt = mysqli_prepare($conn, $sql)){
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit;
	} else{
		echo "Something went wrong. Please try again later.";
	}
}
?>