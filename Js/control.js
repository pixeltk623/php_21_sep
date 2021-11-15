'use strict'

// if (true) {}

// if (true) {} else {}

// if (true) {} else if {} else if (true) {} else {}

// switch(){
// 	case '':
// 		break
// }

var x = 5

var y = 8

var z = 15
//console.log(x<y);

// if (x>y) {
// 	console.log('Print');
// }


// if (x<y) {
// 	console.log("Ok")
// } else {
// 	console.log('Else Block');
// }


// if (x>=y && x>=z) {
// 	console.log('X is Greater Bumber', x);
// } else if(y>=x && y>=z) {
// 	console.log('Y is Greater Bumber', y);
// } else {
// 	console.log('Z is Greater Bumber', z);
// }


// var op = '*';
// var result;
// switch(op) {
// 	case '+':
// 		result = x + y
// 		//console.log(result);
// 		break;
// 	case '-':
// 		result = x - y
// 		break;
// 	case '*':
// 		result = x * y
// 		break;
// 	case '/':
// 		result = x / y
// 		break;
// 	case '%':
// 		result = x % y
// 		break;
// 	default:
// 		result = 'Error'
// 		break;
// }

// console.log(result);


function makeCalculator() {

	var fnum = parseInt(document.getElementById("fn").value)
	var snum = parseInt(document.getElementById("sn").value)
	var op = document.getElementById("op").value
	// console.log(fnum + snum + op);

	// console.log(typeof(fnum))
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
	return false;
}