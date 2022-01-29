<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	

	<div class="container mt-3">
		<h1 class="text-center text-primary">Crud In MVC</h1>
		<a href="#" class="btn btn-info mb-3">Add New Category</a>
		<form action="http://localhost/php_21_sep/mvc/ajax" id="myForm">
			<button type="button" class="ajax-call" style="display: none;">GET</button>
		</form>
		<table id="table_id" class="table  table-bordered display">
		    <thead>
		        <tr>
		        	<th>Sr.No</th>
		            <th>Name</th>
		            <th>Slug</th>
		            <th>Created At</th>
		            <th>Update At</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody class="table-result">
		    </tbody>
		</table>
	</div>


	<script src="assets/js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".ajax-call").trigger("click");
		});
	</script>
</body>
</html>