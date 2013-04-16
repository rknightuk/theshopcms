<?php 

header ("Location: ../cms/update_stock.php?updated");

require ("../db/connect_db.php");

$id = $_POST['product'];
$stock = $_POST['new_stock'];

$query = "UPDATE products
	SET stock_level = stock_level + $stock
	WHERE product_id = $id";
$result = mysqli_query($dbc, $query);

?>