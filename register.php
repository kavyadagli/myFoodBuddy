<!DOCTYPE>
<html lang="en-au">
<meta charset="utf-8" />

<title>My Food Buddy</title>

<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<h1>Register for My Food Buddy</h1>

	<form alight="center" id="form-ajax" action="reg_sup.php" method="post">
		<label alight="center">Username</label><br/><input type="text" name="user" /><br /><br />

		<label>Password</label><br/><input type="text" name="password" /><br /><br />

		<label>Repeat Password</label><br /><input type="password" name="pass2" /><br /><br />

		<label>Age</label><br/><input type="text" name="age" /><br /><br/>

		<label>Height</label><br/><input type="text" name="height"/><label> inches</label><br/><br/>

		<label>Weight</label><br/><input type="text" name="weight" /><label> lbs.</label><br /><br/>

		<div class="dropdown">
			<select name="gender">
	  			<option value="F">Female</option>
	  			<option value="M">Male</option>
			</select>
		</div><br/>

		<div class="dropdown">
			<select name="activityLevel">
	  			<option value="1.2">Sendentary</option>
	  			<option value="1.375">Light Activity</option>
	  			<option value="1.55">Moderate Activity</option>
	  			<option value="1.725">Very Active</option>
				<option value="1.9">Extremely Active</option>
			</select>
		</div><br/>



		<button type="button">Submit</button>
	</form>

</body>

</html>
