<?php
	
	require("connect_db.php");
	
	$resetquery = $_GET['query'];
	$name = $_POST['name'];
	$cat = $_POST['category'];
	$desc = $_POST['description'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$id = $_GET['product_id'];
	
	$query = "UPDATE products
	SET product_name = '$name', category = '$cat', description = '$desc', price = $price, stock_level = $stock
	WHERE product_id = $id;";
		
	mysqli_query($dbc, $query)
			or die("Can't update product");

			echo "<p class='feedback_yes'>$name successfully updated<p>";
			$query = $resetquery;
			include "../inc/layout_table.php";

?>