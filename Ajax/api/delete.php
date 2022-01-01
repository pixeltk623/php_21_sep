<?php 
    include_once 'config.php';



    if (isset($_POST['did'])) {

        unlink($_POST['fileName']);
    	$query = "DELETE  FROM employees WHERE id = ".$_POST['did']; 

    	$result = mysqli_query($conn, $query);

    	if($result) {
    		echo json_encode(['status' => 202, 'message' => 'Record Deleted']);
    	} else {
    		echo json_encode(['status' => 404, 'message' => 'Something Error']);
    	}
    }
?>