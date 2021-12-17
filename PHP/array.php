<?php

// Indexed array 
// associative Array 
// Multidimensonal Array 


function formatArray($arrayData)
{
	echo "<pre>";
	print_r($arrayData);
	echo "</pre>";
}

//$list = array(1,2,3,4,5);

//$list  = [1,2,3,4,5];

//$list = array("Kumar",true, false, 45.656,69);

// $list = array("amit" => "Kumar","Sharvan","Test","Hello");

//formatArray($list);

// echo $list[3];

// for ($i=0; $i < 4; $i++) { 
// 	echo $list[$i];
// 	echo "<br>";
// }


// echo count($list);

// echo sizeof($list);

// for ($i=0; $i < count($list); $i++) { 

// 	echo $list[$i];

// 	echo "<br>";
// }


// foreach ($list as $key => $value) {

// 	echo $key. " - " .$value;
// 	echo "<br>";
// }

// formatArray(array_keys($list));

// formatArray(array_values($list));

// echo $da =  implode(",", $list);

// formatArray(explode(",", $da));


// $list = array(
// 		"name" => "sharvan",
// 		"email" => "s@gmail.com",
// 		"mobile" => 9835401515,
// 		"status" => true,
// 		"gender" => "Male"
// 	);

// formatArray($list);

// echo count($list);

// echo $list['name'];
// echo $list['email'];
// echo $list['mobile'];
// echo $list['mobile'];
// echo $list['gender'];

// $list = array(
// 	array("gender" => "Male"),
// 	array("gender" =>
// 		array(
// 			array("name" => "Sharvan")
// 		),

// 		"gender" => 5
// 	),
// 	array("email" => "s@gmail.com")
// );

// formatArray($list);

// formatArray($list[1][0][0]['name']);
// formatArray($list[1][1][0]);


// foreach ($list as $key => $value) {

// 	formatArray($value);
// }

//formatArray($list);

// for ($i=0; $i < sizeof($list); $i++) { 

// 	formatArray($list[$i]);

// }

$listOfStudents = array(
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
	array(
		"name" => "sharvan",
		"email" => "s@gmail.com",
		"mobile" => 9835401515,
		"status" => true,
		"gender" => "Male",
		"address" => array("city" => "Vadodara", "pin" => 390021)
	),
);

// formatArray($listOfStudents);

// for ($i=0; $i < sizeof($listOfStudents); $i++) { 

// 	echo $listOfStudents[$i]['name'];

// }





// die;
?>



<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>

	<div class="container mt-3">
		<h1 class="text-center text-primary">Array In PHP</h1>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col" rowspan="2">Sr.No</th>
					<th scope="col" rowspan="2">Name</th>
					<th scope="col" rowspan="2">Email</th>
					<th scope="col" rowspan="2">Mobile</th>
					<th scope="col" rowspan="2">Gender</th>
					<th scope="col" rowspan="2">Status</th>
					<th scope="col" colspan="2">Address</th>
				</tr>
				<tr>
					<th>City</th>
					<th>Pin</th>
				</tr>
			</thead>
			<tbody>
				<?php
				/*
			    <?php

			    	if (count($listOfStudents)<1) {
			    		
			    		?>
			    		<tr>
			    			<td colspan="6" class="text-center text-danger">No Record Found</td>
			    		</tr>
			    		<?php

			    	} else {	

			    	for ($i=0; $i < sizeof($listOfStudents); $i++) { 
			    		?>
			    		<tr>
					      <td><?php echo ($i+1); ?></td>
					      <td><?php echo $listOfStudents[$i]['name']; ?></td>
					      <td><?php echo $listOfStudents[$i]['email']; ?></td>
					      <td><?php echo $listOfStudents[$i]['mobile']; ?></td>
					      <td><?php echo $listOfStudents[$i]['gender']; ?></td>
					      <td><?php echo $listOfStudents[$i]['status']; ?></td>
					      <td><?php echo $listOfStudents[$i]['address']['city']; ?></td>
					      <td><?php echo $listOfStudents[$i]['address']['pin']; ?></td>
					    </tr>
			    		<?php
			    	}
			    }
			    ?>
				*/

				foreach ($listOfStudents as $key => $value) {
				?>

					<tr>
						<td><?php echo ($key + 1); ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['mobile']; ?></td>
						<td><?php echo $value['gender']; ?></td>
						<td><?php echo $value['status']; ?></td>
						<td><?php echo $value['address']['city']; ?></td>
						<td><?php echo $value['address']['pin']; ?></td>
					</tr>

				<?php
				}
				?>
			</tbody>
		</table>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>