<?php

$function = $_POST['function'];
$table = $_SESSION['user'];

$log = array();

switch($function) {
	
	case('add'):
		$food = $_POST["food"];
		$cal = $_POST["cal"];
		$date = $_POST["date"];
		$conn = new mysqli('localhost', 'root', 'ashSQLpassword', 'agendaDB');
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO $table (food, calories, eatdate) VALUES ('$food', '$cal', '$date')";
		if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'> $(document).ready(function() {loader('New Entry Successfully Added!');});</script>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		break;
		
	case('finish'):
		break;
}

?>