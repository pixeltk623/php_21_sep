<?php 
	
	include 'config.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$queryUserName = "SELECT * FROM `login` WHERE username = '$username'";
		$resultU = mysqli_query($conn, $queryUserName);
		if($resultU->num_rows>0) {
			echo "Username is already exits";
		} else {
			$userNameS = true;
		}

		$queryEmail = "SELECT * FROM `login` WHERE email = '$email'";
		$resultE = mysqli_query($conn, $queryEmail);
		if($resultE->num_rows>0) {
			echo "Email is already exits";
		} else {
			$emailS = true;
		}

		if (isset($userNameS) && isset($emailS)) {
			$query = "INSERT INTO `login`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";	

			$result = mysqli_query($conn, $query);

			if ($result) {
				
				echo "Registration Done";

			} else {
				echo "Something Error";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title></title>
</head>
<body>

	<form method="post">
		<label>Name</label>
		<input type="text"  name="name" required>
		<br><br>
		<label>Email</label>
		<input type="email" id="email" name="email" required>
		<span id="e1"></span>
		<br><br>
		<label>Username</label>
		<input type="text" id="username" name="username" required>
		<span id="e2"></span>
		<br><br>
		<label>Password</label>
		<input type="password" name="password" required>
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>

	<a href="index.php">Login</a>
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on('keyup', '#email', function() {
				let email = $(this).val();
				const re =/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

				console.log(re.test(email))

				if(re.test(email)) {
					$.ajax({
						type: "POST",
						url: 'emailval.php',		
						data: {email : email},
						dataType: "text",
						success:function(data) {
							let dataAll = JSON.parse(data);
							console.log(dataAll)

							if (email!='') {
								if (dataAll.status==1) {
									$("#e1").text(dataAll.value);
									$("#e1").css('color','red');
								} else {
									$("#e1").text(dataAll.value);
									$("#e1").css('color','green');
								}
							} else {
								$("#e1").text('');
							}
							
						}
					});
				} else {
					$("#e1").text("Email is Not valid");
					$("#e1").css('color','red');
				}
			});
			$(document).on('keyup', '#username', function() {
				let username = $(this).val();
				$.ajax({
						type: "POST",
						url: 'username.php',
						data: {username : username},
						dataType: "text",
						success:function(data) {
							let dataAll = JSON.parse(data);
							console.log(dataAll)

							if (username!='') {
								if (dataAll.status==1) {
									$("#e2").text(dataAll.value);
									$("#e2").css('color','red');
								} else {
									$("#e2").text(dataAll.value);
									$("#e2").css('color','green');
								}
							} else {
								$("#e2").text('');
							}
							
						}
					});
			});

		});
	</script>
</body>
</html>