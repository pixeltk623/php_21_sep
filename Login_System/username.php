<?php 
	
	include 'config.php';
	if (isset($_POST)) {
		$username = $_POST['username'];
	
		$queryEmail = "SELECT * FROM `login` WHERE username = '$username'";
		$resultE = mysqli_query($conn, $queryEmail);
		if($resultE->num_rows>0) {
			echo json_encode(['status'=> '1' , 'value' => "Username is already exits"]);
		} else {
			echo json_encode(['status'=> '2' , 'value' => $username." is available"]);
		}	
	}

?>