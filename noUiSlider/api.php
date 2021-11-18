<?php 
	header('Access-Control-Allow-Origin: *');

	$conn = mysqli_connect("localhost", "root","","api_db");

	$query = "SELECT MIN(price) AS min_price, MAX(price) AS max_price FROM `products`";

	$result = mysqli_query($conn, $query);

	$data = mysqli_fetch_object($result);


	echo json_encode($data);
?>