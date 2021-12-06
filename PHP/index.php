<?php 

//$a = 5;

//echo isset($a);

// if (isset($a)) {
	
// 	echo $a;
// }

//echo $a;

//die;
// $a = false;

// var_dump($a);
// echo $a;

$firstName = "Sharvan";
$lastName = "Kumar";
//echo $firstName." ".$lastName;
//die()
// 	PHP Variables
// A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

// camcale case $carName
// snake case $car_name
// pascale case $CarName

// Rules for PHP variables:

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character

// A variable name cannot start with a number

// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

// Variable names are case-sensitive ($age and $AGE are two different variables)

	// echo "Hello World";
	// echo 'Hello';
	
	// echo "string";

	// die();
	// echo "<h1>Hello This is Kumar</h1>";

	// echo $name_ = "Sharvan Kumar";
	// echo "<br>";
	// echo $name_;
?>  

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Home Page"; ?></title>
</head>
<body>

	<?php 
		echo "<h1>".$firstName." ".$lastName."</h1>";
	?>

	<h1><?php echo $firstName . " ".$lastName; ?></h1>

	<h1><?php echo "Kumar"; ?></h1>

	<?php 
		echo "<h2>Hello Sanjev</h2>";
	?>

	<a href="<?php echo "new.php" ?>">New Page</a>

</body>
</html>