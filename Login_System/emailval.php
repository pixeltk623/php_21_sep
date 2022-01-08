<?php 
	
	include 'config.php';
	if (isset($_POST)) {
		$email = $_POST['email'];
	
		$queryEmail = "SELECT * FROM `login` WHERE email = '$email'";
		$resultE = mysqli_query($conn, $queryEmail);
		if($resultE->num_rows>0) {
			echo json_encode(['status'=> '1' , 'value' => "Email is already exits"]);
		} else {
			echo json_encode(['status'=> '2' , 'value' => $email." is available"]);
		}	
	}

?>