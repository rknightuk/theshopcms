<?php

	$product_id = $_GET['product_id'];
	$resetquery = $_GET['query'];
	
	require('connect_db.php');
	
	$query = "DELETE FROM products WHERE product_id = $product_id";
	
	mysqli_query($dbc, $query);
	
	echo "<p class='feedback_yes'>Product deleted</p>";
	
	include("../db/connect_db.php");
			
	$query = $resetquery;
			
	include("../inc/layout_table.php");

?>