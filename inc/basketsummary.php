<?php

// Check if basket is empty
if (!isset($_SESSION['basket'])){
	echo "<p>There are currently no items in your basket.</p>";
}
else 	{
	require ("db/connect_db.php");

echo "
<table>
				<thead>
				<tr>
				<th scope='col'>Product</th>
				<th scope='col'>Quantity</th>
				<th scope='col'>Price</th>
				<th scope='col'>Subtotal</th>
				</tr>
				</thead>";
$summary = 0;
foreach ($_SESSION['basket'] as $key => $value) {
	$query = "SELECT * FROM products WHERE product_id = $key";

	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	echo "<tr><td><a href='/product.php?product_id=".$row['product_id']."'>".$row['product_name']."</td>
	<td>".$_SESSION['basket'][$key]['quantity']."</td>
	<td>&pound;".$row['price']."</td>
	<td>&pound;".$row['price']*$_SESSION['basket'][$key]['quantity']."</td></tr>";
	$summary += 1;
	if ($summary > 4) {
		break;
	}
	
}

echo "
</table>

<span class='right'><p>This is a summary of your basket. <a href='/basket.php'>View your entire basket</a> or <a href='#' onclick='showBasket(); return false;'>close this summary</a>.</p></span><p class='empty'><a href='#' onclick=emptyBasket('nav_basket'); return false;>Empty Basket</a></p>";
}


?>