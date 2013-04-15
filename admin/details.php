<?php

$type = $_GET['type'];
$id = $_GET['id'];

require ("../db/connect_db.php");

if ($type == "order"){
	echo "<h2>Order #$id details</h2>";
	
	$query = "SELECT * FROM order_contents WHERE order_id = $id";
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
		echo "</thead><tr><td><a href='/product.php?product_id=".$row['product_id']."'>PRODUCT NAME</td>
				<td>".$row['quantity']."</td>
				<td>&pound;".$row['product_price']."</td>
				<td>&pound;".$row['product_price']*$row['quantity']."</td></tr>
				<tr>";
	}

	echo "</tr></table>";

}

else {
	echo "<h2>Customer #$id details</h2>";
	
	$query = "SELECT * FROM customers WHERE cust_id = $id";
	$result = mysqli_query($dbc, $query);

	while ($row = mysqli_fetch_array($result)){
		echo "<p>".$row['cust_fname']." ".$row['cust_lname']."</p>
		<p><a href='mailto:".$row['cust_email']."'>".$row['cust_email']."</a></p>
		<p>Address: ".$row['house_no'].", ".$row['house_pcode']."</p>"
		;

	}
}

?>