<?php 
	session_start();
	include 'config.php';


	if (isset($_SESSION['is_login'])) {
		header("Location: dashboard.php");
	}

	if (isset($_POST['submit'])) {

		$emailOrUserName = $_POST['email'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM login WHERE (username = '$emailOrUserName' AND password = '$password') OR (email = '$emailOrUserName' AND password = '$password')";

		$result = mysqli_query($conn, $query);


		if ($result->num_rows>0) {
			
			$user_id = mysqli_fetch_assoc($result)['id'];

			$_SESSION['is_login'] = true;
			$_SESSION['login_id'] = $user_id;
			$_SESSION['time'] = time();
			header("Location: dashboard.php");

		} else {
			echo "Wrong UserName Or Password";
		}
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

	<form method="post">
		
		<label>Email/Username</label>
		<input type="text" name="email" required>
		<br><br>
		<label>Password</label>
		<input type="password" name="password" required>
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>
	<a href="register.php">New User Registration</a>
</body>
</html>