<!DOCTYPE>
<html lang="en-au">
<meta charset="utf-8" />

<title>My Food Buddy - Registration</title>

<head>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<center><h1 id="title">My Food Buddy Registration</h1></center>
	<div id="empty-space"><div>
	<center><p><italic>Register below with your <br/>
	information for My Food Buddy below to adopt<br/>
	a healthy lifestyle...</italic><p/><center/>


	<form id="formReg" action="reg_sup.php" method="post">
		<div class="username">
			<!-- <label alight="center">NAME</label> --><input type="text" name="name" id="name" placeholder="Name" />
			<!-- <label alight="center">USERNAME</label> --><input type="text" name="user" id="user" placeholder="Username" />
			<!-- <label>PASSWORD</label> --><input type="password" name="pass" id="pass" placeholder="Password" />
		</div>

		<!-- <label>AGE</label><br/> --><input type="number" name="age" id="age" placeholder="Age" /><br/>

		<!-- <label>HEIGHT</label><br/> --><input type="number" name="height" id="height" placeholder="Height" /><label>inches</label><br/>

		<!-- <label>WEIGHT</label><br/> --><input type="number" name="weight" id="weight" placeholder="Weight" /><label>lbs.</label><br/>
		<div class="dropdown-both">
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
			</div>
		<div/><br/>

		<button type="submit" id="submit">Submit</button><p id="errorText"></p>
	</form>

</body>

</html>
