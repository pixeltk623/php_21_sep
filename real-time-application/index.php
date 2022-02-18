<?php 

	$conn = mysqli_connect("localhost","root","","realtime");

	include_once 'email_header.php';

	if (isset($_POST['submit'])) {
		
		$course_name = $_POST['Course'];
		$email_sentby =  "Sharvan Kumar (CEO)";
		$Phone = "+91-9835401515";
		$Email ="info@growwithphp.com";
		$Address= "Gotri, Vadodara";
		$pincode = "390021";
		$course_url = $course_name;

		$query = "SELECT name, email FROM users";
		$result = mysqli_query($conn,$query);
		while ($response[] = mysqli_fetch_object($result)) {}

		$queryE = "SELECT template, type FROM email_templates WHERE type='promotion'";
		$resultE = mysqli_query($conn,$queryE);
		$responseEt = mysqli_fetch_object($resultE);

		$listOfUsers = array_filter($response);

		foreach ($listOfUsers as $key => $user) {
			$vars = array(
		    	"{name}" => $user->name,
		    	"{course_name}" => $course_name,
		    	"{email_sentby}" => $email_sentby,
		    	"{phone}" => $Phone,
		    	"{email}" => $Email,
		    	"{address}" => $Address,
		    	"{pincode}" => $pincode,
		    	"{course_url}" => $course_url,
			);

			$html = strtr($responseEt->template, $vars);
			
		    $mail->setFrom('dream.sharvan@gmail.com', 'Company Inc');
		    $mail->addAddress($user->email, $user->name);
		    $mail->isHTML(true);
		    $mail->Subject = ucfirst($responseEt->type);
		    $mail->Body    = $html;

		    $mail->send();
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
		<label>New Course Launch</label>
		<select name="Course">
			<option value="">Select</option>
			<option value="PHP">PHP</option>
			<option value="Java">Java</option>
			<option value="Digital Marketing">Digital Marketing</option>
			<option value="Laravel">Laravel</option>
		</select>
		<button type="submit" name="submit">Send</button>
	</form>

</body>
</html>