<?php

	$product_id = $_GET['product_id'];
	$resetquery = $_GET['query'];
	
	require('connect_db.php');

	$query = "SELECT photo_url FROM products WHERE product_id = $product_id";

	$result = mysqli_query($dbc, $query);
	
	if ($result) {
			while ( $row = mysqli_fetch_array($result)){
				$file = "../img/products/".$row['photo_url'];
				unlink($file);
		}
	}
	
	$query = "DELETE FROM products WHERE product_id = $product_id";
	
	mysqli_query($dbc, $query);
	
	echo "<p class='feedback_yes'>Product deleted</p>";
			
	$query = $resetquery;
			
	include("../inc/layout_table.php");

?>