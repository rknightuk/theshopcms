<?php

$order_id = $_GET['order_id'];
$cust_id = $_GET['cust_id'];

require ("../db/connect_db.php");

	echo "<h3>Order #$order_id details</h3>";

	echo "<p>Customer #$cust_id: </p>";
	
	$query = "SELECT * FROM customers WHERE cust_id = $cust_id";
	$result = mysqli_query($dbc, $query);

	while ($row = mysqli_fetch_array($result)){
		echo "<p>Name: ".$row['cust_fname']." ".$row['cust_lname']."</p>
		<p>Contact: <a href='mailto:".$row['cust_email']."'>".$row['cust_email']."</a></p>
		<p>Address: ".$row['house_no'].", ".$row['house_pcode']."</p>"
		;

	}
	
	$query = "SELECT order_contents.order_id, order_contents.product_id, order_contents.quantity, order_contents.product_price, products.product_id, products.product_name
		FROM order_contents, products
		WHERE order_id = $order_id
		AND order_contents.product_id = products.product_id";
	$result = mysqli_query($dbc, $query);

	echo "<table>
				<thead>
				<tr>
				<th scope='col'>Product</th>
				<th scope='col'>Quantity</th>
				<th scope='col'>Price</th>
				<th scope='col'>Subtotal</th>
				</tr>";

	while ($row = mysqli_fetch_array($result)){
		echo "</thead><tr><td><a href='/product.php?product_id=".$row['product_id']."'>".$row['product_name']."</td>
				<td>".$row['quantity']."</td>
				<td>&pound;".$row['product_price']."</td>
				<td>&pound;".$row['product_price']*$row['quantity']."</td></tr>
				<tr>";
	}

	echo "</tr></table>";

?>