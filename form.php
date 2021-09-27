<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<fieldset>
		<legend>Registration Form</legend>
	<form method="POST" enctype="">
		<label>Name</label>
		<input type="text" name="name" value="Sharvan" autocomplete="off" placeholder="Enter Your Name" required >
		<!-- disabled readonly -->
		<!-- min="2021-09-09" max="2021-09-20" multiple size="2" -->
		<br><br>

		<label>Range</label>
		<input type="range" name="" value="2" min="1" max="5">
		<br><br>
		<label>Progress</label>
		<progress value="10" max="100"></progress>
		<br><br>
		<label>Email</label>
		<input type="email" name="email" required="">
		<br><br>

		<label>Phone Number</label>
		<input type="text" name="Phone Number" pattern="[7-9]{1}[0-9]{9}">
		<br><br>

		<label>Tel</label>
		<input type="tel" id="tel" name="tel">

		<br><br>

		<label>Address</label>
		<textarea placeholder="Address" cols="25" rows="5"></textarea>
		<br><br>

		<label>City</label>
		<select >
			<option value="">Select</option>
			<option value="">Vadodara</option>
			<option value="">Bharuch</option>
			<option value="">Anand</option>
			<option value="">Vadodara</option>
		</select>
		<br><br>
		<label>Qty</label>
		<input type="number" >
		<br><br>

		<label>Gender</label>

		<input type="radio" name="gender" value="Male" checked>Male
		<input type="radio" name="gender" value="Female">Female
		<br><br>

		<label>Hobby</label>

		<input type="checkbox" name="hobby" value="Cricket">Cricket
		<input type="checkbox" name="hobby" value="Football" checked>Football
		<br><br>

		<label>Date</label>
		<input type="date" name="" value="2021-09-09">
		<br><br>


		<label>Date & Time</label>
		<input type="datetime-local" name="" value="">
		<br><br>

		<label>Time</label>
		<input type="time" name="" value="">
		<br><br>

		<label>Month</label>
		<input type="month" name="" value="">
		<br><br>

		<label>Week</label>
		<input type="week" name="" value="">
		<br><br>


		<label>Profile Pic</label>
		<input type="file" name="Profile" multiple>
		<br><br>

		<label>Search</label>
		<input type="search" name="">

		<br><br>

		<label>Color</label>
		<input type="color" name="">
		<br><br>
		<input type="submit" name="submit">
		<input type="reset" name="reset">
	</form>
	</fieldset>
</body>
</html>