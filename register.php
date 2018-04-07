<!DOCTYPE>
<html lang="en-au">
<meta charset="utf-8" />

<title>My Food Buddy</title>

<head>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="setInterval(checkFormValid(), 500)">

	<center><h1 align="center" style="text-align: center;">MY FOOD BUDDY</h1></center>
	<div id="empty-space"><div>
	<center><p><italic>Register below with your <br/>
	information for My Food Buddy below to adopt<br/>
	a healthy lifestyle...</italic><p/><center/>


	<form id="form-ajax" action="reg_sup.php" method="post">
		<div class="username">
			<label alight="center">NAME</label><input type="text" name="name" id="name" />
			<label alight="center">USERNAME</label><input type="text" name="user" id="user" />
			<label>PASSWORD</label><input type="password" name="pass" id="pass" />
			<label>REPEAT PASSWORD</label><input type="password" name="pass2" id="pass" />
		</div>

		<label>AGE</label><br/><input type="number" name="age" id="age" /><br/>

		<label>HEIGHT</label><br/><input type="number" name="height" id="height" /><label>inches</label><br/>

		<label>WEIGHT</label><br/><input type="number" name="weight" id="weight" /><label>lbs.</label><br/>
		<div class="dropdown-both">
			<div class="dropdown">
				<select name="gender" id="gender">
		  			<option value="F">FEMALE</option>
		  			<option value="M">MALE</option>
				</select>
			</div><br/>


			<div class="dropdown">
				<select name="activity" id="activity">
		  			<option value="1.2">SENDENTARY</option>
		  			<option value="1.375">LIGHT ACTIVITY</option>
		  			<option value="1.55">MODERATE ACTIVITY</option>
		  			<option value="1.725">VERY ACTIVE</option>
					<option value="1.9">EXTREMELY ACTIVE</option>
				</select>
			</div>
		<div/><br/>
		<script type="text/javascript">
			function checkFormValid() {
				if (document.getElementById("pass").value == document.getElementById("pass2")) {
					document.getElementById("submit").disabled = false;
					document.getElementById("errorText").innerHTML = "Passwords must match";
				} else {
					document.getElementById("submit").disabled = false;
					document.getElementById("errorText").innerHTML = "";
				}
			}
		</script>

		<button type="submit" id="submit">SUBMIT</button><p id="errorText"></p>
	</form>

</body>

</html>
