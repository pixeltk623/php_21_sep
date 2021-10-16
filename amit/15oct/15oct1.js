'use strict'

document.getElementById("fn").value = "";
document.getElementById("sn").value = "";
document.getElementById("op").value = "select";


function validateForm() {
	var fnum = document.getElementById("fn").value;

	var snum = document.getElementById("sn").value;

	var op = document.getElementById("op").value;
	console.log(op);

	if (fnum == "" && snum == "" && op == "select") {
		document.getElementById("amit").innerHTML = "fill your first number";
		document.getElementById("amit1").innerHTML = "fill your second number";
		document.getElementById("amit2").innerHTML = "select your operator";
		return false;
	} else {
		validateamit();
		validateamit1();
		validateamit2();

		return false;
	}
}




function validateamit() {
	var fnum = document.getElementById("fn").value;

	if (fnum != "") {
		document.getElementById("amit").innerHTML = "";
		return false;
	} else {
		document.getElementById("amit").innerHTML = "fill your first number";
		return false;
	}
}

function validateamit1() {
	var snum = document.getElementById("sn").value;

	if (snum != "") {
		document.getElementById("amit1").innerHTML = "";
		return false;
	} else {
		document.getElementById("amit1").innerHTML = "fill your second number";
		return false;
	}
}

function validateamit2() {
	var op = document.getElementById("op").value;

	if (op == "select") {
		document.getElementById("amit2").innerHTML = "select your operator";
		return false;
	} else {
		document.getElementById("amit2").innerHTML = "";
		return false;
	}
}



function makeCalculator() {
	validateForm();

	var fnum = document.getElementById("fn").value;

	var snum = document.getElementById("sn").value;

	var op = document.getElementById("op").value;

	if (fnum != "" && snum != "" && op != "select") {
		var fnum = parseInt(document.getElementById("fn").value);
		var snum = parseInt(document.getElementById("sn").value);
		var op = document.getElementById("op").value;

		var result

		switch (op) {
			case '+':
				result = fnum + snum;
				break;
			case '-':
				result = fnum - snum;
				break;
			case '*':
				result = fnum * snum;
				break;
			case '/':
				result = fnum / snum;
				break;
		}

		console.log(result);

		var html = "<table border='1' style='border-collapse: collapse; width: 500px;'>\
		<tr>\
			<th>Result</th>\
			<td>"+ result + "</td>\
		</tr>\
	 </table>"

		document.getElementById("res").innerHTML = html;

		var equalsign = "="
		var total = (fnum + " " + op + " " + snum + " " + equalsign + " " + result);

		var html1 = "<table border='1' style='border-collapse: collapse; width: 500px;'>\
		<tr>\
			<th>Expression</th>\
			<td>"+ total + "</td>\
		</tr>\
	 </table>"

		document.getElementById("overalltotal").innerHTML = html1;

	}

	return false;
}


