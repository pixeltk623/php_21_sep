<?php 
	
	$dayName =  date("D");

	switch ($dayName) {
		case 'Mon':
			echo $dayName;
			break;
		case 'Tue':
			echo $dayName;
			break;
		case 'Wed':
			echo $dayName;
			break;
		case 'Thu':
			echo $dayName;
			break;
		case 'Fri':
			echo $dayName;
			break;
		case 'Sat':
			echo $dayName;
			break;
		case 'Sun':
			echo $dayName;
			break;
		
		default:
			echo "Error";
			break;
	}

	die;

	// if (condition) {
	// 	# code...
	// }

	// $retVal = (condition) ? a : b ;

	// $a = 200;

	// $b = 45;

	// echo ($a>$b) ? $a : $b;



	// if (condition) {
	// 	# code...
	// } else {
	// 	# code...
	// }

	// if (condition) {
	// 	# code...
	// } elseif {
	// 	# code...
	// }

	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }
	
	

	if (isset($_POST['validate'])) {
		
		$fname = $_POST['fname'];

		if ($fname=='') {
			$className = 'is-invalid';
		} else {
			$className = "is-valid";
		}
	}

	$fullName = "Kumar Amit";

	echo (isset($fullName)) ? $fullName : '';

	// echo $_GET['number'];	
		
	// if (isset($_GET['submit'])) {
	// 	echo $_GET['number'];
	// }

	// if (isset($_GET['number'])) {
	// 	echo $_GET['number'];
	// }

	//echo $_POST['number'];

	// if (isset($_POST['number'])) {
	// 	echo $_POST['number'];
	// }

	if (isset($_POST['submit'])) {
		$number = $_POST['number'];

		if ($number%2==0) {
			$result =  $number." is Even";
		} else {
			$result =  $number. " is Odd";
		}
	}

	if (isset($_POST['submit'])) {
		$number = $_POST['number'];

		if ($number%2==0) {
			$result =  "<h3 style='color:blue'>".$number." is Even</h3>";
		} else {
			$result =  "<h3 style='color:red'>".$number." is Odd</h3>";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

	<form method="POST">
		<label>Enter Your Number: </label>
		<input type="text" name="number">
		<input type="submit" name="submit">
	</form>

	<div class="container">
		<form method="post">
			<input type="text" name="fname" class="form-control <?php echo (isset($className)) ? $className : '' ?>">

			<!-- <input type="text" name="fname" class="form-control <?php echo $className; ?>"> -->


			<input type="submit" name="validate">
		</form>
	</div>

	<?php 
		if (isset($result)) {
			?>

			<h2 style="color: 
			blue;"><?php echo $result; ?></h2>

			<?php
		}

		if (isset($result)) {
			echo "<h2 style='color:blue;'>".$result."</h2>";
		}
	?>

	<?php
		if (isset($result)) {
			echo $result;
		}
	?>


	<?php 

		if (isset($fullName)) {
			?>
				<h5><?php echo $fullName; ?></h5>
			<?php
		}

	?>

</body>
</html>