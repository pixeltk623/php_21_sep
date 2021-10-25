// (normal pattern)

// var pattern = "";
// for (var i = 1; i <= 6; i++) {

//     for (var j = 1; j <= i; j++) {

//         pattern += "<span>" + j + "</span>";
//         //console.log(i, '*');
//     }

//     pattern += "<br>";
// }

// document.getElementById("pattern").innerHTML = pattern;

// ------------------------------------------------------------------------------------------------------

// (reverse pattern)

// var pattern = "";
// for (var i = 6; i >= 1; i--) {

//     for (var j = 1; j <= i; j++) {

//         pattern += "<span>" + j + "</span>";
//         //console.log(i, '*');
//     }

//     pattern += "<br>";
// }

// document.getElementById("pattern").innerHTML = pattern;

// ------------------------------------------------------------------------------------------------------

// (timer)


// var min    = 0;
// var second = 00;
// var hour = 0;
// var zeroofsecond = 0;
// var zeroofmin = 0;
// var counterId = setInterval(function(){
//                   countUp();
//                 }, 1000);

// function countUp () {
//     second++;
//     if(second == 60){
//         second = 00;
//         min = min + 1;
//     }
//     if (min == 60) {
//         min = 00;
//         hour = hour + 1;
//     }

//     if (min == 10){
//         zeroofmin = '';
//     } else if (min == 00) {
//         zeroofmin = 0;
//     }

//     if(second == 10){
//         zeroofsecond = '';
//     }else
//     if(second == 00){
//         zeroofsecond = 0;
//     }

//     document.getElementById("count-up").innerText = hour+':'+zeroofmin+min+':'+zeroofsecond+second;
// }

// function showTime() {
//     var date = new Date();
//     var h = date.getHours();
//     var m = date.getMinutes();
//     var s = date.getSeconds();
//     var session = "AM";

//     if (h > 12) {
//         h = h - 12;
//         session = "PM";
//     }


//     if (h < 10) {
//         h = "0" + h;
//     }
//     if (m < 10) {
//         m = "0" + m;
//     }
//     if (s < 10) {
//         s = "0" + s;
//     }

//     var time = h + ":" + m + ":" + s + " " + session;

//     document.getElementById("count-up").innerHTML = time;
//     setInterval(showTime, 1000);

// }

// showTime();

// ------------------------------------------------------------------------------------------------------

let a = [[1, 2], [3, 4]];
let b = [[2, 3], [4, 5]];
let c = [[], []];

for (let i = 0; i < 2; i++) {
    for (let j = 0; j < 2; j++) {
        c[i][j] = a[i][j] + b[i][j];
    }
}

console.log(c);
