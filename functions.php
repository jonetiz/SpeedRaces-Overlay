<?php
date_default_timezone_set("America/New_York");

if(isset($_GET['key'])) {
	$writeKey = $_GET['key'];
} else {
	$writeKey = "";
}

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hr-relay');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn === false){
    die("ERROR: Could not connect to databse. " . mysqli_connect_error());
}

function query($column, $table, $where, $condition) {
	global $conn;
	$sql   		= "SELECT $column FROM $table WHERE $where='$condition' LIMIT 1"; 
	$result 	= mysqli_query($conn, $sql);
	$r			= mysqli_fetch_assoc($result);
	return $r[$column];
}

function qcd($column) {
	return query('currentvalue','currentdata','currentdata',$column);
}

function getRunnersList() {
	global $conn;
	$sql   		= "SELECT * FROM runnersDefault"; 
	$result 	= mysqli_query($conn, $sql);
	$array 		= array();
	
	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}
	
	return 		json_encode($array);
}

function getFacts() {
	global $conn;
	$sql   		= "SELECT * FROM facts"; 
	$result 	= mysqli_query($conn, $sql);
	$array 		= array();
	
	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}
	
	return 		json_encode($array);
}

function queryAll($column, $table) {
	global $conn;
	$sql   	= "SELECT $column FROM $table"; 
	$result 	= mysqli_query($conn, $sql);
	$r			= mysqli_fetch_all($result);
	return $r;
}
?>