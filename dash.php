<?php
session_start();
$user = $_SESSION['user'];
$name = $_SESSION['name'];

$servername = "localhost";
$username = "root";
$password = "ashSQLpassword";
$dbname = "foodDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Food Buddy - Dashboard</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="calculation.js"></script>
</head>
<body onload="updateList();">
	<div id="header">
		<h1 id="headerText"><?php echo $name; ?>'s Dashboard</h1>
	</div>
	<div id="under">
		<div id="avatarSideBar">
			stuff
		</div>
		<div id="content">
			<table border="0">
				<tr>
					<th>Total Daily Intake</th>
					<th>-</th>
					<th>Calories Eaten</th>
					<th>=</th>
					<th>Calories Left</th>
				</tr>
				<tr>
					<td id="tdee"></td>
					<td>-</td>
					<td id="cal_eaten"></td>
					<td>=</td>
					<td id="cal_left"></td>
				</tr>
			</table>
			<div id="addFood">
				<form>
					<input type="text" placeholder="Food Name" name="food" id="addformFood" />
					<input type="number" placeholder="Calories" name="calories" id="addformCal" />
					<input type="submit" onclick="addFood()" />
				</form>
			</div>
			<div id="tableWrapper">
			</div>
		</div>
	</div>
</body>