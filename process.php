<?php

session_start();
$function = $_POST['function'];
$food = $_POST["food"];
$cal = $_POST["cal"];
$user = $_POST["user"];
$date = date("Y-m-d");
$table = $_SESSION['user'];

$log = array();

$conn = new mysqli('localhost', 'root', 'ashSQLpassword', 'foodDB');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO $user (food, calories, eatdate) VALUES ('$food', '$cal', '$date');";
if ($conn->query($sql) === TRUE) {
	echo "Success!";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>