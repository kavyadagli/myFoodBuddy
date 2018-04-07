<?php

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$activity = $_POST['activity'];


$servername = "localhost";
$username = "root";
$password = "ashSQLpassword";
$dbname = "foodDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into login (user, pass, name, gender, age, height, weight, activity) values ('$user', '$pass', '$name', '$gender', '$age', '$height', '$weight', '$activity');";

if ($conn->query($sql) === TRUE) {
	$_SESSION['user'] = $user;
	$_SESSION['name'] = $name;
	header('Location: dash.php');
} else {
	echo "Had some problems, please return to registration form and try again";
}

?>