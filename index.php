<!DOCTYPE html>
<html>
	<head>
		<title>My Food Buddy</title>
		<!--<link rel="stylesheet" type="text/css" href="style3.css" />-->
		<link href="style3.css" rel="stylesheet" type="text/css" media="only screen and (min-device-width: 801px)" />
		<link href="mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" />
	</head>
	<body>
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
		
		if (isset($_POST['user'])) {
			if(isset($_POST['pass'])) {
				$sql = "SELECT * FROM login WHERE user='$user'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if ($row["pass"] === $pass) {
							$_SESSION['user'] = $user;
							$_SESSION['name'] = $row["name"];
							//$_SESSION['color'] = $row["color"];
							//$_SESSSION['classes'] = $row["classes"];
							header("Location: dash.php");
						} else {
							echo "<p style='color: red;'>Username/Password is Incorrect</p>";
						}
					}
				} else {
					echo "<p style='color: red;'>Username/Password is Incorrect</p>";
				}
			}
		}
		?>
		<div id="wrapper">
			<h1 id="title">My Food Buddy Login</h1>
			<div id="loginContain">
				<form action="index.php" method="POST">
					<p class="loginP">Username:</p>
					<input type="text" name="user" />
					<p class="loginP">Password:</p>
					<input type="password" name="pass" /><br /><br />
					<input type="submit" />
				</form>
			</div>
			<a href="register.php">Sign Up</a>
		</div>
	</body>
</html>