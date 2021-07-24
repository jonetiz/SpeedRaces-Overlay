<?php
include '../functions.php';

$color = $_POST['color'];
$runner = $_POST['runner'];
$runnerDisplayTwitch = $_POST['runnerDisplayTwitch'];
$runnerTwitch = $_POST['runnerTwitch'];

if($stmt = mysqli_prepare($conn, 
	"INSERT INTO currentData (currentData, currentValue) VALUES ('lastUpdate','".time()."'), ('runner".$color."',?),	('runner".$color."DisplayTwitch',?), ('runner".$color."Twitch',?) ON DUPLICATE KEY UPDATE currentData=VALUES(currentData),currentValue=VALUES(currentValue)")){
	mysqli_stmt_bind_param($stmt, "sss", 
		$runner,
		strtolower($runnerDisplayTwitch),
		strtolower($runnerTwitch)
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