<?php

session_start();
$function = $_POST['function'];
$food = $_POST["food"];
$cal = $_POST["cal"];
$date = date("Y-m-d");
$table = $_SESSION['user'];

$log = array();

switch($function) {
	
	case('add'):
		$conn = new mysqli('localhost', 'root', 'ashSQLpassword', 'agendaDB');
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO $table (food, calories, eatdate) VALUES ('$food', '$cal', '$date');";
		if ($conn->query($sql) === TRUE) {
			echo "Success!";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		break;
		
	case('finish'):
		break;
}

?>