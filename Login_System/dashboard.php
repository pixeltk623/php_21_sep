<?php 
	session_start();
	include 'config.php';

	$currentTime = time();
	$diff = $currentTime - $_SESSION['time'];
	if($diff>120) {
		session_destroy();
		header("Location: index.php");
	} else {
		$_SESSION['time'] = time(); 
	}

	if (isset($_SESSION['is_login'])) {    
		
		$query = "SELECT * FROM `login` WHERE id = ".$_SESSION['login_id'];
		$result = mysqli_query($conn, $query);
		$userInfo = mysqli_fetch_assoc($result);

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
	<h1>Welcome to Gujarat (<?php echo $userInfo['name']; ?>)</h1>

	<a href="logout.php">Log Out</a>
</body>
</html>