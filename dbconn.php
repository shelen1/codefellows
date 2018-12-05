<?php 

$servername = "mupsik.local";
$username = "codefellows";
$password = "codefellows";
$database = "fellows_dataset";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

function GetFellows() {
	global $conn;
	return mysqli_query($conn, "SELECT fellowship, name__first, name__last, age FROM codefellows ORDER BY fellowship ASC, name__last ASC");
}

function GetAge() {
	global $conn;
	return mysqli_query($conn, "SELECT ROUND(AVG(age),0) AS age, fellowship FROM codefellows GROUP BY fellowship ASC");
 }

function GetMinMaxFellowAge() {
	global $conn;
	return mysqli_query($conn, "(SELECT age, fellowship, name__first, name__last FROM codefellows ORDER BY age ASC LIMIT 1) UNION (SELECT age, fellowship, name__first, name__last FROM codefellows ORDER BY age DESC LIMIT 1)");

}

?>