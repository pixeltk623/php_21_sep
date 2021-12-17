<?php 
	include_once 'config.php';
	if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
		
		$id = $_GET['id'];
	    $query = "DELETE  FROM employees WHERE id=".$id; 
	    $result = mysqli_query($conn, $query);

	    if($result) {

	    	header("Location: ".BASE_URL);
	    	
	    }	else {
	    	echo "Something Error";
	    }

	}

?>