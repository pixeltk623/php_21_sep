<?php
	echo str_replace("world","Peter","Hello world!");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		#footer {
			text-align: center;
		}
	</style>
</head>
<body>
	<p>Hey {name},</p>
	<p>What are you waiting for now? I just did it for you,</p>
	<p>Yes, you've heard me right.</p>
	<p>Go and start your {course_name} Career right now.</p>
	<p><a href="{course_url}">Start Absolutely Free</a></p>
	<div id="footer">
		<i>Note: For practical assignments in our courses, <br>
		we recommend Premium Web Hosting.<br></i>
		<b>{email_sentby}</b><br>
		Phone: {phone}<br>
		Email: {email}<br>
		Address: {address}<br>
		{pincode}<br>
		<a href="#">Unsubscribe</a>
	</div>
</body>
</html>