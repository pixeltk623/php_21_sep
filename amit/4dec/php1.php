<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // (1)

    /*     $num = 12;
    // echo "<h3>Fibonacci series using recursive function:</h3>";
    ?>
    
    <h2><?php echo "Fibonacci series using recursive function:"; ?></h2>

    <?php
    function series($num)
    {
        if ($num == 0) {
            return 0;
        } else if ($num == 1) {
            return 1;
        } else {
            return (series($num - 1) + series($num - 2));
        }
    }
    for ($i = 0; $i < $num; $i++) {
        echo series($i);
        echo " ";
    } */


    // (2)

    /*     $num= 9;  
    echo "Your number is : $num", "<br>";  
    echo "By using sqrt function Your number is : ", sqrt ($num);   */

    // (3)

    /*    $num1 = 65;
    $num2 = 69;
    $areaValue = ($num1 * $num2) / 2;
    echo "area of triangle is ",$areaValue; */

    // (4)

    /*    $a = 15;
    $b = 27;

    echo "The number before swapping is:", "<br>", "Number a =" , $a , " and b=" , $b, "<br>", "<br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "The number after swapping is: ", "<br>", "Number a =" , $a , " and b=" , $b; */

    // (5)
    /* 
    $a = 697;
    $b = 599;
    $c = 4;

    $discriminant =  ($b * $b) - (4 * $a * $c);

    if ($discriminant >= 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);

        echo "The roots of quadratic equation are ", $root1, " and ", $root2;
    } else {
        $root1 = -$b/(2*$a);
        $root2 = sqrt(-$discriminant)/(2*$a);
    } */

    // (6)
    /* 
    $kilometers = 56;
    $factor = 0.621371;
    $miles = $kilometers * $factor;
    echo $kilometers, " kilometers is equal to ", $miles, " miles"; */

    // (7)

    // $amit = ["a" => "amit1", "b" => "amit2", "c" => "amit3"];
    // foreach ($amit as $index => $amit) {
    //     echo $index, " - ", $amit, ", ";

    // }

    // $array = ["amit1", "amit2 ", "third" => "amit3"];
    // foreach ($array as $index => $array) {
    //     echo "$index = $array. ";
    // }

    // $count = 1;
     
    // while ($count < 5) {
    //     $count = $count + 1;
    // }
     
    // echo $count;

    

    ?>

</body>

</html>