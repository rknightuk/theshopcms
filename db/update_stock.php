<?php 

require ("../db/connect_db.php");

$id = $_POST['product'];
$stock = $_POST['new_stock'];

$query = "UPDATE products
	SET stock_level = stock_level + $stock
	WHERE product_id = $id";
$result = mysqli_query($dbc, $query);

echo "<p class='feedback_yes'>$stock items successfully updated.</p>";

?>