<?php
	
	$name = $_POST['name'];
	$cat = $_POST['category'];
	$desc = $_POST['description'];
	$url = $_POST['url'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	
	require("connect_db.php");
	
	$query = "INSERT INTO products (product_name, category, description, photo_url, price, stock_level)
			VALUES ('$name', '$cat', '$desc', '$url', $price, $stock);";
		
	mysqli_query($dbc, $query)
			or die("Can't create new product");

	echo "<p class='feedback_yes'><em>".$name."</em> successfully added.</p>"

?>