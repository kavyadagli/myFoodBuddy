<pre>
<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$servername = "localhost";
$username = "root";
$password = "ashSQLpassword";
$dbname = "foodDB";
// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check Connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pass FROM login WHERE user=$user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if ($row["pass"] == $pass) {
			$_SESSION['user'] = $user;
			header("Location: dash.php");
		} else {
			$_SESSION['loginFail'] = "fail";
			header("Location: index.php");
			exit();
		}
	}
} else {
	$_SESSION['loginFail'] = "fail";
	header("Location: index.php");
	exit();
}

?>
</pre>