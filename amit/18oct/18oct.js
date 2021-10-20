
// (1 to 100 prime numbers)
// let count = 0;
// let L1 = "";   

// for (let i = 2; i < 100; i++) {
//     for (let j = 1; j <= i; j++) {
//         if (i%j==0) {
//             count++;
//         }
//     } 
//     if (count == 2) {
//         L1 += " " + i + " ";
//         console.log(L1);
//     }

//     count = 0;
// }
// document.getElementById("primenumber").innerHTML = L1;

// ---------------------------------------------------------------------------------------------------------------

// (sum of numbers)

// function CalculateNumber() {

//     let amit = document.getElementById("number").value;

//     let amit1 = String(amit);

//     let a1 = amit1.split("");

//     let a2 = a1.map(Number);

//     let totalsum = 0;

//     for (let i = 0; i < a2.length; i++) {
//         totalsum += a2[i];
//     }
//     console.log(totalsum);
//     document.getElementById("total").value = totalsum;
// }

// ---------------------------------------------------------------------------------------------------------------


// (counting numbers)
// function CalculateLength() {

//     let amit = document.getElementById("number").value;

//     let amit1 = String(amit);

//     let a1 = amit1.split("");

//     let a2 = a1.map(Number);

//     console.log(a2.length);

//     document.getElementById("length").innerHTML = a2.length;

// }

// ---------------------------------------------------------------------------------------------------------------

// (reversing number)

// function ReverseArray() {

//     let amit = document.getElementById("number").value;

//     let amit1 = String(amit);

//     let a1 = amit1.split("");

//     let a2 = a1.reverse();
//     let a3 = a2.join("");
//     console.log(a3);
    
//     document.getElementById("length").innerHTML = a3;

// }

// ---------------------------------------------------------------------------------------------------------------

// (Armstrong number)

// function CubeofNumber() {

//         let amit = document.getElementById("number").value;
    
//         let amit1 = String(amit);
    
//         let a1 = amit1.split("");
    
//         let a2 = a1.map(Number);
    
//         let totalsum = 0;
    
//         for (let i = 0; i < a2.length; i++) {
//             totalsum += Math.pow(a2[i], 3);
//         }
//         console.log(totalsum);
//         document.getElementById("cube").value = totalsum;
//     }

// ---------------------------------------------------------------------------------------------------------------

// (palindrome number)

// let L1 = "";
// function Palindrome() {
 
//     for (let amit = 0; amit <= 1000 ; amit++) {
//         let amit1 = String(amit);

//         let a1 = amit1.split("");
    
//         let a2 = a1.reverse();
//         let a3 = a2.join("");

//         if (amit1 == a3) {
//             console.log(amit1 + " number is palindrome");
//             L1 += " " + amit1 + " ";
//         }
//     }
//     document.getElementById("length").innerHTML = L1;
// }