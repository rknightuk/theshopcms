<?php
	
	header("Location: /cms/edit.php?updated");
	
	require("connect_db.php");
	
	$name = $_POST['name'];
	$cat = $_POST['category'];
	$desc = $_POST['description'];
	$url = $_POST['url'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$id = $_GET['product_id'];
	
	$query = "UPDATE products
	SET product_name = '$name', category = '$cat', description = '$desc', price = $price, stock_level = $stock
	WHERE product_id = $id;";
		
	mysqli_query($dbc, $query)
			or die("Can't update product");

?>