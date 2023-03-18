<?php
require_once ('connect.php');


function execute($sql) {
	$host="localhost";
	$user= "root";
	$password="";
	$database="qlbh";
	$con = mysqli_connect($host, $user, $password, $database);


	mysqli_query($con, $sql);

	mysqli_close($con);
}
function executeResult($sql) {
	$host="localhost";
	$user= "root";
	$password="";
	$database="qlbh";
	$con = mysqli_connect($host, $user, $password, $database);

	//query
	$resultset = mysqli_query($con, $sql);
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$list[] = $row;
	}
	mysqli_close($con);

	return $list;
}