<?php
	
	if (isset($_POST)) {
		
		echo "<pre>";

		print_r($_POST);
		print_r($_FILES['profile_pic']);
	}

?>