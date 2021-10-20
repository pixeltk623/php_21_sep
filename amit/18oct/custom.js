'use strict'

// var number = 154;

// var i = 1
// while(i<=10) {
// 	console.log(i);
// 	i++
// }


// var i = 11;
// do {

// 	console.log(i);

// 	i++; // 2
// } while(i<=10)

// var number = 154;
// var sum = 0;
// var rem;
// while(number!=0) {

// 	rem = number%10; // 154%10 == 4 // 15%10 = 5 // 1

// 	sum = sum + rem // 0 + 4 // 4 // 4 + 5 // 9 // 9 + 1 = 10 

// 	number = parseInt(number/10) // 15 // 1


// }

// console.log(sum);
// var count = 0
// while(number!=0) {
// 	number = parseInt(number/10)
// 	count++;
// }


// console.log(count);

// var number = 154;
// var rem; // 45 
// var rev = 0;

// while(number!=0) {
// 	rem = number%10; // 4 // 5 
// 	rev = rev*10 + rem; // 0 + 4 // 4 // 40 + 5 // 45 // 450 + 1 // 451
// 	number = parseInt(number/10)
// }

// console.log(rev);

// Math.pow(2, 4);


// var number = 180;

// var temp = number;

// var sum = 0
// var rem;
// while(number!=0) {
// 	rem = number%10;
// 	sum = sum + Math.pow(rem, 3);
// 	number = parseInt(number/10)
// }	

// //console.log(sum);

// if (temp==sum) {
// 	console.log(temp, " is Armstrong Number");
// } else {
// 	console.log(temp, " is Not Armstrong Number");
// }

// var number = 121;
// var temp = number;
// var rem; // 45 
// var rev = 0;

// while(number!=0) {
// 	rem = number%10; // 4 // 5 
// 	rev = rev*10 + rem; // 0 + 4 // 4 // 40 + 5 // 45 // 450 + 1 // 451
// 	number = parseInt(number/10)
// }

// // console.log(temp);
// // console.log(rev);

// if (temp==rev) {
// 	console.log('Yes');
// } else {
// 	console.log('No');
// }

// for(var i = 1; i<=8; i++) {

// 	//console.log(i);

// 	for(var j = 1; j<=8; j++) {
// 		console.log(j);
// 	}

// }


// var html = '';

// html += '<table style="border-collapse: collapse; width: 100%;" border="1">';
// for(var i = 1; i<=8; i++) {
// 	html +=    '<tr>';
// 	for(var j = 1; j<=8; j++) {
// 		var sum = i + j

// 		if (sum%2==0) {
// 			html += '<td style="height: 80px; background-color: black;"></td>';
// 		} else {
// 			html += '<td style="height: 80px;"></td>';
// 		}

		
// 	}
// 	html +=    '</tr>';
// }
// html +='</table>'

// document.getElementById("chess").innerHTML = html;

// 1
// 12
// 123
// 1234
// 12345
// 123456

// var pattern = "";
// for(var i = 1; i<=6; i++) {

// 	for(var j = 1; j<=i; j++) {

// 		pattern += "<span>"+j+"</span>";
// 		//console.log(i, '*');
// 	}

// 	pattern += "<br>";
// }

// document.getElementById("pattern").innerHTML = pattern;


// var arrayList = ["sharvan","amit","sharvan","amit","sharvan","amit","sharvan","amit"]

// // ["sharvan","amit"]

// //console.log(arrayList.includes("sharvan"));

// var newAray = []

// for(var i = 0; i<arrayList.length; i++) {

// 	if(!newAray.includes(arrayList[i])) {
// 		newAray.push(arrayList[i])
// 	}
// }


// console.log(newAray);


//Timer

// 08: 49 :01

// https://www.programiz.com/python-programming/examples/pyramid-patterns

//Python Program to Add Two Matrices

// Anagram


//const fruits = ["Banana", "Orange", "Apple", "Mango"];

// const numbers = [56,35,45,89,12];

// // numbers.sort();

// // console.log(numbers);

// numbers.sort(function(a, b){return b-a});

// console.log(numbers);



// https://www.geeksforgeeks.org/bubble-sort-algorithms-by-using-javascript/
