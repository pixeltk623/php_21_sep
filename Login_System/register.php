<?php 
	
	include 'config.php';

	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "INSERT INTO `login`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";

		$result = mysqli_query($conn, $query);

		if ($result) {
			
			echo "Registration Done";

		} else {
			echo "Something Error";
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
		<label>Name</label>
		<input type="text" name="name" required>
		<br><br>
		<label>Email</label>
		<input type="email" name="email" required>
		<br><br>
		<label>Username</label>
		<input type="text" name="username" required>
		<br><br>
		<label>Password</label>
		<input type="password" name="password" required>
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>

	<a href="index.php">Login</a>
</body>
</html>