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


var min    = 00;
var second = 00;
var hour = 00;
var zeroPlaceholder = 0;
var counterId = setInterval(function(){
                  countUp();
                }, 1000);

function countUp () {
    second++;
    if(second == 60){
        second = 00;
        min = min + 1;
    }
    if (min == 60) {
        min = 00;
        hour = hour + 1;
    }

    if (min == 10){
        zeroPlaceholder = '';
    } else if (min == 00) {
        zeroPlaceholder = 0;
    }
    
    if(second == 10){
        zeroPlaceholder = '';
    }else
    if(second == 00){
        zeroPlaceholder = 0;
    }
    
    document.getElementById("count-up").innerText = hour+':'+zeroPlaceholder+min+':'+zeroPlaceholder+second;
}




