var bmrVal;
var tdeeVal;

function bmr(gender, weight, feet, inches, age){
	if (gender == female){
		bmrVal = 655;
		bmrVal += (9.6*weight*2.20462) + (1.8*((feet*12) + inches) * 2.54)
		bmrVal -= (4.7 * age)
	} else {
		bmrVal = 66;
		bmrVal += (13.7*weight*2.20462) + (5*((feet*12) + inches) * 2.54)
		bmrVal -= (6.8 * age)
	}
}

function tdee(activityLevel, bmrVal){
	tdeeVal = activityLevel * bmrVal;
}

function updateList() {
	$.ajax({
		type: "POST",
		url: "update.php",
		data: {
			function: 'update'
		},
		dataType: "text",
		success: function(response) {
			document.getElementById("tableWrapper").innerHTML = response;
		},
	});
}

function addFood(user) {
	var foodin = document.getElementById("addformFood").value;
	var calin = document.getElementById("addformCal").value;
	var dt = new Date();
	var datein = dt.toYMD();

	updateList();
	$.ajax({
		type: "POST",
		url: "process.php",
		data: {
			'function': 'add',
			'food': foodin,
			'cal': calin,
			'user': user,
		},
		dataType: "json",
		success: function(data) {
			document.getElementById("avatarSideBar").innerHTML = data;
			updateList();
		},
	});
}

Date.prototype.toYMD = Date_toYMD;
function Date_toYMD() {
	var year, month, day;
	year = String(this.getFullYear());
	month = String(this.getMonth() + 1);
	if (month.length == 1) {
		month = "0" + month;
	}
	day = String(this.getDate());
	if (day.length == 1) {
		day = "0" + day;
	}
	return year + "-" + month + "-" + day;
}