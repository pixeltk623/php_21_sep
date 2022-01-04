<?php 
	session_start();


	if (isset($_SESSION['is_login'])) {
		//
	} else {
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Welcome to Gujarat</h1>
</body>
</html>