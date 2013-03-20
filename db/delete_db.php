<?php

	$product_id = $_GET['product_id'];
	
	require('connect_db.php');
	
	$query = "DELETE FROM products WHERE product_id = $product_id";
	
	mysqli_query($dbc, $query);
	
	echo "<p class='feedback_yes'>Product deleted</p>";
	
	include("../db/connect_db.php");
			
	$query = "SELECT * FROM products ORDER BY category";
			
	include("../inc/table_view.php");

?>