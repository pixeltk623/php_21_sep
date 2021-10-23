<?php 
		
	// if (isset($_POST['submit'])) {
	// 	echo $name = $_POST['name'];

	// 	$hobby = $_POST['hobby'];

	// 	echo "<pre>";

	// 	print_r($hobby);
	// }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name" id="name">
		<br><br>

		<label>Email</label>
		<input type="email" name="email" id="email">
		<br><br>

		<label>Gender</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female

		<br><br>

		<label>Hobby</label>
		<input type="checkbox" name="hobby[]" value="Cricket">Cricket
		<input type="checkbox" name="hobby[]" value="Football">Football
		<input type="checkbox" name="hobby[]" value="Tenis">Tenis
		<br><br>
		<label>City</label>
		<select id="city">
			<option value="">select</option>
			<option value="1">Vadodara</option>
			<option value="2">Surat</option>
			<option value="3">Anand</option>
		</select>
		<br><br>
		<label>File</label>
		<input type="file" name="fileUpload" id="fileUpload">
		<br><br>

		<input type="submit" name="submit" onclick="return formCheckValidation()">
	</form>

	<script type="text/javascript">
		const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		
		// var email = "asdsa@sgmail.com";

		// var atSymbol = email.indexOf("@");

		// var dot = email.lastIndexOf(".");

		// console.log(re.test(email));

		// if (atSymbol < 1) {
		// 	e1 = false;
		// } else {
		// 	e1 = true;
		// }

		// if(dot <= atSymbol + 2) {
		// 	e2=false;
		// } else {
		// 	e2 = true;
		// }

		// if (dot === email.length - 1) {
		// 	e3 = false;
		// } else {
		// 	e3 = true;
		// }


		// if(e1==true && e2 == true && e3==true) {
		// 	console.log('Sahi hai');
		// } else {
		// 	console.log('Not Valid');
		// }

		//console.log(atSymbol);

	    // if(atSymbol < 1)
	    
	    // var dot = emailString.indexOf(".");

	    // if(dot <= atSymbol + 2) 
	    
	    // // check that the dot is not at the end
	    // if (dot === emailString.length - 1) 
    


		function formCheckValidation() {
			
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var gender = document.getElementsByName('gender');
			var hobby = document.getElementsByName("hobby[]");
			// var file = document.getElementById('fileUpload').files[0];
			// var size_kb = parseInt(file.size/1024);
			// var ext = (file.name).split('.').pop();


			var hoobyList = [];
			for(var i = 0; i<hobby.length; i++) {

				if (hobby[i].checked) {
					hoobyList.push(hobby[i].value)
				}
			}
			
			
			if (hoobyList.length==0) {
				console.log('you have not  Selected hobby');
			} else {

				if (hoobyList.length<2) {
					console.log('Atleat 2 hobby must be Selected');
				} else {
					console.log(hoobyList);
				}
				
			}

			//console.log(hoobyList);


			// console.log(gender);

			// var genderValue = "";
			// for(var i=0; i<gender.length; i++) {

			// 	if (gender[i].checked) {
			// 		genderValue = gender[i].value;
			// 	}
			// }

			// if (genderValue=='') {
			// 	console.log('Gender is Not Selected');
			// } else {

			// 	console.log(genderValue);

			// }
			
			// if (gender[0].checked || gender[1].checked) {
			// 	console.log('True');
			// } else {
			// 	console.log('False');
			// }

			// console.log(ext);


			// console.log(size_kb);

			// console.log(file);
			


			return false;
		}

	</script>
</body>
</html>