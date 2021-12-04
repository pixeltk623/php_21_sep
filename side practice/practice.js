let calcAverage = (value1, value2, value3) => 
    average = (value1 + value2 + value3) / 3;
    


let totalAverage1 = calcAverage(44, 23, 71);
let totalAverage2 = calcAverage(45, 25, 61);
console.log(totalAverage1);
console.log(totalAverage2);

let checkWinner = (value1, value2) => {
    if (value1 > value2) {
        console.log("dolphin is winner");
    } else {
        console.log("you are winner");
    }
}

checkWinner(totalAverage1, totalAverage2);