<!DOCTYPE>
<html lang="en-au">
<meta charset="utf-8" />

<head>
	<title>My Food Buddy - Registration</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<h1 id="title">My Food Buddy Registration</h1>
		<div id="formContain">
			<center>
				<p style="font-style: italic;">Register below with your <br/>
				information for My Food Buddy below to adopt<br/>
				a healthy lifestyle...</p>
			<center/>
			<form id="formReg" action="reg_sup.php" method="post">
				<!-- <label alight="center">NAME</label> -->
				<input type="text" name="name" id="name" placeholder="Name" /><br /><br />
				<!-- <label alight="center">USERNAME</label> -->
				<input type="text" name="user" id="user" placeholder="Username" /><br /><br />
				<!-- <label>PASSWORD</label> -->
				<input type="password" name="pass" id="pass" placeholder="Password" /><br /><br />
				<!-- <label>AGE</label><br/> -->
				<input type="number" name="age" id="age" placeholder="Age" /><br /><br />
				<!-- <label>HEIGHT</label><br/> -->
				<input type="number" name="height" id="height" placeholder="Height (inches)" /><br /><br />
				<!-- <label>WEIGHT</label><br/> -->
				<input type="number" name="weight" id="weight" placeholder="Weight (pounds)" /><br /><br />
				<div class="dropdown">
					<select name="gender" id="gender">
						<option value="" disabled selected>Gender</option>
			  			<option value="F">Female</option>
			  			<option value="M">Male</option>
					</select>
				</div><br/>

				<div class="dropdown">
					<select name="activity" id="activity">
						<option value="" disabled selected>Activity Level</option>
		  				<option value="1.2">Sedentary</option>
			  			<option value="1.375">Light Activity</option>
			  			<option value="1.55">Moderate Activity</option>
			  			<option value="1.725">Very Active</option>
						<option value="1.9">Extreme Active</option>
					</select>
				</div><br/>
				<button type="submit" id="submit">Submit</button><p id="errorText"></p>
			</form>
		</div>
	</div>
</body>
</html>