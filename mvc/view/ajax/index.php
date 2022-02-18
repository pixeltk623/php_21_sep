<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>


	<div class="container mt-3">
		<h1 class="text-center text-primary">Crud In MVC</h1>
		<a href="javascript:void(0)" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModal">Add New Category</a>

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
		<?php

		include_once 'view/partials/modal.php';
		include_once 'view/partials/modaledit.php';
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://malsup.github.io/jquery.form.js"></script>

	<script src="assets/js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".ajax-call").trigger("click");


		});
	</script>
</body>

</html>