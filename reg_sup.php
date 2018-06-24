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
$password = /*password*/;
$dbname = "foodDB";

$conn = new mysqli(/*insert information*/);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into login (user, pass, name, gender, age, height, weight, activity) values ('$user', '$pass', '$name', '$gender', '$age', '$height', '$weight', '$activity'); create table $user (food varchar(255) NOT NULL, calories int NOT NULL, eatdate date NOT NULL);";

if ($conn->query($sql) == TRUE) {
	$_SESSION['user'] = $user;
	$_SESSION['name'] = $name;
	header('Location: http://myfoodbuddy.net/dash.php');
} else {
	echo "Had some problems, please return to registration form and try again";
}

?>
